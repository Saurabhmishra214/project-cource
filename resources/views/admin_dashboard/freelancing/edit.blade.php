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
      novalidate>
    @csrf
    {{-- @method('PATCH') remove kar diya, sirf POST rahega --}}

    <div class="col-md-6">
        <label class="form-label">Job Title</label>
        <input type="text" 
               class="form-control" 
               name="title" 
               value="{{ old('title', $job->title) }}" 
               required>
        <div class="invalid-feedback">
            Please enter job title.
        </div>
    </div>

    <div class="col-md-6">
        <label class="form-label">Description</label>
        <input type="text" 
               class="form-control" 
               name="description" 
               value="{{ old('description', $job->description) }}" 
               required>
        <div class="invalid-feedback">
            Please enter job description.
        </div>
    </div>

    <div class="col-md-6">
        <label class="form-label">Company Name</label>
        <input type="text" 
               class="form-control" 
               name="company_name" 
               value="{{ old('company_name', $job->company_name) }}" 
               required>
        <div class="invalid-feedback">
            Please enter Company Name.
        </div>
    </div>

    <div class="col-md-6">
        <label class="form-label">Location</label>
        <input type="text" 
               class="form-control" 
               name="location" 
               value="{{ old('location', $job->location) }}" 
               required>
        <div class="invalid-feedback">
            Please enter location.
        </div>
    </div>

    <div class="col-md-6">
        <label class="form-label">Pay</label>
        <input type="number" 
               class="form-control" 
               name="pay" 
               value="{{ old('pay', $job->pay) }}" 
               required>
        <div class="invalid-feedback">
            Please enter Pay.
        </div>
    </div>

    <div class="col-md-6">
        <label class="form-label">Duration</label>
        <input type="text" 
               class="form-control" 
               name="duration" 
               value="{{ old('duration', $job->duration) }}" 
               required>
        <div class="invalid-feedback">
            Please enter Duration.
        </div>
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
