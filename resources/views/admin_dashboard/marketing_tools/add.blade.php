@extends('admin_dashboard.master_layout')
@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <div class="container-fluid"> 
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                        <h4 class="page-title">Marketing Tools</h4>
                        <div class="">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Mifty</a></li>
                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                <li class="breadcrumb-item active">Add Tool</li>
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
                                    <h4 class="card-title">Add Marketing Tool</h4>
                                </div>
                            </div>                                
                        </div>
                        <div class="card-body pt-0">
                            <form class="row g-3 needs-validation was-validated" 
                                method="POST" 
                                action="{{ route('marketing-tools.store') }}" 
                                novalidate
                                enctype="multipart/form-data">
                                @csrf

                                <div class="col-md-6">
                                    <label class="form-label">Tool Name</label>
                                    <input type="text" 
                                        class="form-control @error('title') is-invalid @enderror" 
                                        name="title" 
                                        value="{{ old('title') }}" 
                                        required>
                                    @error('tool_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Tool Type</label>
                                    <select class="form-control" name="type" required>
                                        <option value="">Select Type</option>
                                        <option value="image">Image</option>
                                        <option value="video">Video</option>
                                        <option value="pdf">PDF</option>
                                        <option value="link">Link</option>
                                    </select>
                                    @error('type')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">File / Image / Video</label>
                                    <input type="file" 
                                        class="form-control @error('file_path') is-invalid @enderror" 
                                        name="file_path">
                                    @error('file_path')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">External Link</label>
                                    <input type="text" 
                                        class="form-control @error('external_link') is-invalid @enderror" 
                                        name="external_link" 
                                        value="{{ old('external_link') }}">
                                    @error('external_link')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" 
                                        name="description" required>{{ old('description') }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Add Tool</button>
                                </div>
                            </form>
                        </div> 
                    </div> 
                </div> 
            </div>
        </div>
    </div>
</div>

@endsection
