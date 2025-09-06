@extends('admin_dashboard.master_layout')

@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <div class="container-fluid"> 
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                        <h4 class="page-title">Add Session for: {{ $training->title }}</h4>
                        <div class="">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Mifty</a></li>
                                <li class="breadcrumb-item"><a href="#">Training</a></li>
                                <li class="breadcrumb-item active">Add Session</li>
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
                                    <h4 class="card-title">Add Affiliate Training Session</h4>                      
                                </div>
                            </div>                               
                        </div>
                        <div class="card-body pt-0">
                            {{-- We are using the training parameter in the action route --}}
                            <form class="row g-3" method="POST" action="{{ route('sessions.store', ['training' => $training->id]) }}">
                                @csrf

                                {{-- Hidden input to pass the training ID --}}
                                <input type="hidden" name="training_id" value="{{ $training->id }}">

                                <div class="col-md-6">
                                    <label for="title" class="form-label">Session Title</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" 
                                           id="title" name="title" value="{{ old('title') }}" required>
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                               

                                <div class="col-md-6">
                                    <label for="session_video_url" class="form-label">Session Video URL</label>
                                    <input type="text" class="form-control @error('session_video_url') is-invalid @enderror" 
                                           id="session_video_url" name="session_video_url" value="{{ old('session_video_url') }}">
                                    @error('session_video_url')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                           

                                <div class="col-12 mt-4">
                                    <button class="btn btn-primary" type="submit">Add Session</button>
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