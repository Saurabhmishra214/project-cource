@extends('admin_dashboard.master_layout')
@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <div class="container-fluid"> 
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                        <h4 class="page-title">Freelancing Jobs</h4>
                        <div class="">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Mifty</a></li>
                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                <li class="breadcrumb-item active">Edit Job</li>
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
                                    <h4 class="card-title">Edit Job</h4>
                                </div>
                            </div>                                  
                        </div>
                        <div class="card-body pt-0">
<form class="row g-3 needs-validation" 
      method="POST" 
      action="{{ route('freelancing.update', $job->id) }}" 
      novalidate
      enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="col-md-6">
        <label class="form-label">Job Title</label>
        <input type="text" 
               class="form-control @error('title') is-invalid @enderror" 
               name="title" 
               value="{{ old('title', $job->title) }}" 
               required>
        @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="col-md-6">
        <label class="form-label">Description</label>
        <input type="text" 
               class="form-control @error('description') is-invalid @enderror" 
               name="description" 
               value="{{ old('description', $job->description) }}" 
               required>
        @error('description')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="col-md-6">
        <label class="form-label">Company Name</label>
        <input type="text" 
               class="form-control @error('company_name') is-invalid @enderror" 
               name="company_name" 
               value="{{ old('company_name', $job->company_name) }}" 
               required>
        @error('company_name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="col-md-6">
        <label class="form-label">Location</label>
        <input type="text" 
               class="form-control @error('location') is-invalid @enderror" 
               name="location" 
               value="{{ old('location', $job->location) }}" 
               required>
        @error('location')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="col-md-6">
        <label class="form-label">Pay</label>
        <input type="text" 
               class="form-control @error('pay') is-invalid @enderror" 
               name="pay" 
               value="{{ old('pay', $job->pay) }}" 
               required>
        @error('pay')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="col-md-6">
        <label class="form-label">Duration</label>
        <input type="text" 
               class="form-control @error('duration') is-invalid @enderror" 
               name="duration" 
               value="{{ old('duration', $job->duration) }}" 
               required>
        @error('duration')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="col-md-6">
        <label class="form-label">Summary Video</label>
        <input type="file" 
               class="form-control @error('summary_video') is-invalid @enderror" 
               name="summary_video" 
               value="{{ old('summary_video') }}">
        @error('summary_video')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="col-12">
        <button class="btn btn-primary" type="submit">Update Job</button>
    </div>
</form>

                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>

<script>
    (function () {
        'use strict';
        var forms = document.querySelectorAll('.needs-validation');
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
    })();
</script>

@endsection
