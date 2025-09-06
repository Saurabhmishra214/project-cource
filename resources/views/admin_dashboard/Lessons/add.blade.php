@extends('admin_dashboard.master_layout')
@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <div class="container-fluid"> 
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                        <h4 class="page-title">Add Lesson</h4>
                        <div class="">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="{{ route('courses.list') }}">Courses</a></li>
                                <li class="breadcrumb-item active">Add Lesson</li>
                            </ol>
                        </div>                                
                    </div>
                </div>
            </div>                   

            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Lesson for Course: {{ $course->title }}</h4>
                        </div>
                        <div class="card-body pt-0">

                            <form class="row g-3 needs-validation was-validated" method="POST" action="{{ route('lessons.store', $course->id) }}" novalidate>
                                @csrf

                                <div class="col-md-6">
                                    <label for="lessonTitle" class="form-label">Lesson Title</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="lessonTitle" name="title" value="{{ old('title') }}" required>
                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="lessonDescription" class="form-label">Lesson Description</label>
                                    <input type="text" class="form-control @error('description') is-invalid @enderror" id="lessonDescription" name="description" value="{{ old('description') }}">
                                    @error('description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="lessonVideo" class="form-label">Video URL</label>
                                    <input type="text" class="form-control @error('video_url') is-invalid @enderror" id="lessonVideo" name="video_url" value="{{ old('video_url') }}">
                                    @error('video_url')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="lessonOrder" class="form-label">Lesson Order</label>
                                    <input type="number" class="form-control @error('lesson_order') is-invalid @enderror" id="lessonOrder" name="lesson_order" value="{{ old('lesson_order') }}" required>
                                    @error('lesson_order')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Add Lesson</button>
                                </div>
                            </form>

                        </div><!--end card-body--> 
                    </div><!--end card--> 
                </div> 
            </div><!--end row-->
        </div><!-- container -->
    </div>
</div>

@endsection
