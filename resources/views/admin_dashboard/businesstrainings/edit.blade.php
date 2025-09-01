@extends('admin_dashboard.master_layout')

@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <div class="container-fluid"> 
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                        <h4 class="page-title">Edit Training</h4>
                        <div class="">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Mifty</a></li>
                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                <li class="breadcrumb-item active">Edit Training</li>
                            </ol>
                        </div>                                
                    </div>
                </div>
            </div>                   

            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Training</h4>
                        </div>

                        <div class="card-body pt-0">
                            <form class="row g-3 needs-validation was-validated" 
                                  method="POST" 
                                  action="{{ route('businesstrainings.update', $training->id) }}" 
                                  novalidate>
                                @csrf
                                @method('PUT') <!-- Update method -->

                                <div class="col-md-6">
                                    <label for="title" class="form-label">Training Title</label>
                                    <input type="text" 
                                           class="form-control" 
                                           id="title" 
                                           name="title" 
                                           value="{{ old('title', $training->title) }}" 
                                           required>
                                    <div class="invalid-feedback">
                                        Please enter training title.
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="description" class="form-label">Training Description</label>
                                    <input type="text" 
                                           class="form-control" 
                                           id="description" 
                                           name="description" 
                                           value="{{ old('description', $training->description) }}" 
                                           required>
                                    <div class="invalid-feedback">
                                        Please enter training description.
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="video_url" class="form-label">Video URL</label>
                                    <input type="text" 
                                           class="form-control" 
                                           id="video_url" 
                                           name="main_video_url" 
                                           value="{{ old('main_video_url', $training->main_video_url) }}" 
                                           required>
                                    <div class="invalid-feedback">
                                        Please provide a valid video URL.
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="category" class="form-label">Category</label>
                                    <select class="form-select" id="category" name="category" required>
                                        <option disabled value="">Choose...</option>
                                        <option value="programming" {{ old('category', $training->category) == 'programming' ? 'selected' : '' }}>Programming</option>
                                        <option value="web" {{ old('category', $training->category) == 'web' ? 'selected' : '' }}>Web Development</option>
                                        <option value="design" {{ old('category', $training->category) == 'design' ? 'selected' : '' }}>Design</option>
                                        <option value="marketing" {{ old('category', $training->category) == 'marketing' ? 'selected' : '' }}>Marketing</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid category.
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Update Training</button>
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
