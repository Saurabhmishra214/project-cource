@extends('admin_dashboard.master_layout')
@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <div class="container-fluid"> 
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                        <h4 class="page-title">Add Live Webinar</h4>
                        <div class="">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Add Webinar</li>
                            </ol>
                        </div>                                
                    </div>
                </div>
            </div>                   

            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Webinar</h4>
                        </div>
                        <div class="card-body pt-0">

                            <form class="row g-3 needs-validation" method="POST" action="{{ route('livewebinar.store') }}" novalidate>
                                @csrf

                                <div class="col-md-6">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
                                    <div class="invalid-feedback">Please enter webinar title.</div>
                                </div>

                                <div class="col-md-6">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
                                    <div class="invalid-feedback">Please enter webinar description.</div>
                                </div>

                                <div class="col-md-6">
                                    <label for="duration_minutes" class="form-label">Duration (minutes)</label>
                                    <input type="number" class="form-control" id="duration_minutes" name="duration_minutes" value="{{ old('duration_minutes') }}" required>
                                    <div class="invalid-feedback">Please enter duration in minutes.</div>
                                </div>

                                <div class="col-md-6">
                                    <label for="webinar_date" class="form-label">Webinar Date</label>
                                    <input type="date" class="form-control" id="webinar_date" name="webinar_date" value="{{ old('webinar_date') }}" required>
                                    <div class="invalid-feedback">Please select webinar date.</div>
                                </div>

                                <div class="col-md-6">
                                    <label for="image_url" class="form-label">Image URL</label>
                                    <input type="url" class="form-control" id="image_url" name="image_url" value="{{ old('image_url') }}">
                                    <div class="invalid-feedback">Please enter a valid image URL.</div>
                                </div>

                                <div class="col-md-6">
                                    <label for="rating" class="form-label">Rating (0-10)</label>
                                    <input type="number" step="0.1" class="form-control" id="rating" name="rating" value="{{ old('rating') }}">
                                    <div class="invalid-feedback">Please enter rating between 0 to 10.</div>
                                </div>

                                <div class="col-md-6">
                                    <label for="likes" class="form-label">Likes</label>
                                    <input type="number" class="form-control" id="likes" name="likes" value="{{ old('likes', 0) }}">
                                    <div class="invalid-feedback">Please enter number of likes.</div>
                                </div>

                                <div class="col-md-6">
                                    <label for="genres_tags" class="form-label">Genres/Tags (comma separated)</label>
                                    <input type="text" class="form-control" id="genres_tags" name="genres_tags" value="{{ old('genres_tags') }}">
                                    <div class="invalid-feedback">Please enter genres or tags.</div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Submit Webinar</button>
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
