@extends('admin_dashboard.master_layout')
@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <div class="container-fluid"> 
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                        <h4 class="page-title">Automation Courses</h4>
                        <div class="">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Mifty</a></li>
                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                <li class="breadcrumb-item active">Edit Course</li>
                            </ol>
                        </div>                                
                    </div>
                </div>
            </div>                   

            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">                      
                                    <h4 class="card-title">Edit Course</h4>                      
                                </div>
                            </div>                                 
                        </div>

                        <div class="card-body pt-0">
                      <form class="row g-3 needs-validation was-validated" 
      method="POST" 
      action="{{ route('courses.update', $course->id) }}" 
      novalidate>
    @csrf
    @method('PATCH')

    <div class="col-md-6">
        <label for="validationCustom01" class="form-label">Course Title</label>
        <input type="text" 
               class="form-control @error('title') is-invalid @enderror" 
               id="validationCustom01" 
               name="title" 
               value="{{ old('title', $course->title) }}" 
               required>
        @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="validationCustom02" class="form-label">Course Description</label>
        <input type="text" 
               class="form-control @error('description') is-invalid @enderror" 
               id="validationCustom02" 
               name="description" 
               value="{{ old('description', $course->description) }}" 
               required>
        @error('description')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="validationCustom03" class="form-label">Video URL</label>
        <input type="text" 
               class="form-control @error('video_url') is-invalid @enderror" 
               id="validationCustom03" 
               name="video_url" 
               value="{{ old('video_url', $course->video_url) }}" 
               required>
        @error('video_url')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="category" class="form-label">Category</label>
        <select class="form-select @error('category') is-invalid @enderror" 
                id="category" 
                name="category" 
                required>
            <option disabled value="">Choose...</option>
            <option value="programming" {{ old('category', $course->category) == 'programming' ? 'selected' : '' }}>Programming</option>
            <option value="web" {{ old('category', $course->category) == 'web' ? 'selected' : '' }}>Web Development</option>
            <option value="design" {{ old('category', $course->category) == 'design' ? 'selected' : '' }}>Design</option>
            <option value="marketing" {{ old('category', $course->category) == 'marketing' ? 'selected' : '' }}>Marketing</option>
        </select>
        @error('category')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="col-12">
        <button class="btn btn-primary" type="submit">Update Course</button>
    </div>
</form>
                        </div> 
                    </div>
                </div> 
            </div>
        </div>

        <footer class="footer text-center text-sm-start d-print-none">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-0 rounded-bottom-0">
                            <div class="card-body">
                                <p class="text-muted mb-0">
                                    © <script> document.write(new Date().getFullYear()) </script>2025
                                    Mifty
                                    <span class="text-muted d-none d-sm-inline-block float-end">
                                        Design with
                                        <i class="iconoir-heart-solid text-danger align-middle"></i>
                                        by Mannatthemes
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>
</div>
@endsection
