@extends('admin_dashboard.master_layout')
@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <div class="container-fluid"> 
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                        <h4 class="page-title">Affiliate Trainings</h4>
                        <div class="">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Mifty</a></li>
                                <li class="breadcrumb-item"><a href="#">Training</a></li>
                                <li class="breadcrumb-item active">Add Training</li>
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
                                    <h4 class="card-title">Add Affiliate Training</h4>                      
                                </div>
                            </div>                               
                        </div>
                        <div class="card-body pt-0">
                            <form class="row g-3 needs-validation was-validated" 
                                  method="POST" 
                                  action="{{ route('affiliatetrainings.store') }}" 
                                  novalidate>
                                @csrf

                                <div class="col-md-6">
                                    <label for="title" class="form-label">Training Title</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" 
                                           id="title" name="title" value="{{ old('title') }}" required>
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="description" class="form-label">Training Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" 
                                              id="description" name="description" rows="4" required>{{ old('description') }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="main_video_url" class="form-label">Main Video URL</label>
                                    <input type="text" class="form-control @error('main_video_url') is-invalid @enderror" 
                                           id="main_video_url" name="main_video_url" value="{{ old('main_video_url') }}" required>
                                    @error('main_video_url')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="day_number" class="form-label">Day Number</label>
                                    <input type="number" class="form-control @error('day_number') is-invalid @enderror" 
                                           id="day_number" name="day_number" value="{{ old('day_number') }}" required>
                                    @error('day_number')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="category" class="form-label">Category</label>
                                    <select class="form-select @error('category') is-invalid @enderror" 
                                            id="category" name="category" required>
                                        <option disabled value="">Choose...</option>
                                        <option value="programming" {{ old('category') == 'programming' ? 'selected' : '' }}>Programming</option>
                                        <option value="web" {{ old('category') == 'web' ? 'selected' : '' }}>Web Development</option>
                                        <option value="design" {{ old('category') == 'design' ? 'selected' : '' }}>Design</option>
                                        <option value="marketing" {{ old('category') == 'marketing' ? 'selected' : '' }}>Marketing</option>
                                    </select>
                                    @error('category')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Add Training</button>
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