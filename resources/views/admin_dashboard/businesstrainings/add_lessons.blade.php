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
                            <h4 class="card-title">Lesson for Course: {{ $training->title }}</h4>
                        </div>
                        <div class="card-body pt-0">

                            <form class="row g-3 needs-validation" method="POST" action="{{ route('training.lessons.store', $training->id) }}">
                                @csrf

                                <div class="lesson-block border p-3 rounded mb-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label">Lesson Title</label>
                                            <input type="text" class="form-control" name="title" required>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Lesson Description</label>
                                            <input type="text" class="form-control" name="description">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Video URL</label>
                                            <input type="text" class="form-control" name="video_url">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Lesson Order</label>
                                            <input type="number" class="form-control" name="lesson_order" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Save Lesson</button>
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
