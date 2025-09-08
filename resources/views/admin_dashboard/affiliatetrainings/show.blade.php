@extends('admin_dashboard.master_layout')

@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="container-fluid"> 

            <!-- Page Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                        <h4 class="page-title">Course Detail</h4>                          
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Sessions Left -->
                <div class="col-lg-8">                            
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Sessions</h4>
                        </div>
                        <div class="card-body pt-0">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Title</th>
                                            <th class="text-end">Video</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($training->sessions as $session)
                                            <tr>
                                                <td class="fw-semibold">{{ $session->title }}</td>
                                                <td class="text-end">
                                                    @if($session->session_video_url)
                                                        <a href="{{ $session->session_video_url }}" target="_blank" class="btn btn-sm btn-primary">
                                                            <i class="fas fa-play"></i> Play
                                                        </a>
                                                    @else
                                                        <span class="text-muted">N/A</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="2" class="text-center text-muted">No sessions available.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div><!--card-body-->
                    </div><!--end card-->
                </div> <!-- end col -->

                <!-- Training Right -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Training Info</h4>
                        </div>
                        <div class="card-body pt-0">
                            <!-- Main Video -->
                            @if($training->main_video_url)
                                <div class="ratio ratio-16x9 mb-3">
                                    <iframe width="100%" height="200" src="{{ $training->main_video_url }}" title="Training Video" frameborder="0" allowfullscreen></iframe>
                                </div>
                            @endif

                            <h5 class="fw-bold">{{ $training->title }}</h5>
                            <p class="text-muted">{{ $training->description }}</p>

                            <p>
                                <span class="badge bg-primary-subtle text-primary">{{ $training->category }}</span>
                            </p>

                            <p class="text-muted mb-0">
                                <i class="far fa-calendar me-1"></i> 
                                {{ $training->created_at->format('d M, Y') }}
                            </p>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->                                       
        </div><!-- container -->
    </div>
</div>
@endsection
