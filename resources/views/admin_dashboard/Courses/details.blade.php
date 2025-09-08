@extends('admin_dashboard.master_layout')

@section('content')
<div class="page-wrapper">
    <!-- Page Content-->
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
                <!-- Lessons Left -->
                <div class="col-lg-8">                            
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Lessons</h4>
                        </div>
                        <div class="card-body pt-0">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th class="text-end">Order</th>
                                            <th class="text-end">Video</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($course->lessons as $lesson)
                                            <tr>
                                                <td class="fw-semibold">{{ $lesson->title }}</td>
                                                <td>{{ Str::limit($lesson->description, 60) }}</td>
                                                <td class="text-end">{{ $lesson->lesson_order }}</td>
                                                <td class="text-end">
                                                    @if($lesson->video_url)
                                                        <a href="{{ $lesson->video_url }}" target="_blank" class="btn btn-sm btn-primary">
                                                            <i class="fas fa-play"></i> Play
                                                        </a>
                                                    @else
                                                        <span class="text-muted">N/A</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" class="text-center text-muted">No lessons available.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div><!--card-body-->
                    </div><!--end card-->
                </div> <!-- end col -->

                <!-- Course Right -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Course Info</h4>
                        </div>
                        <div class="card-body pt-0">
                            <!-- Video -->
                            @if($course->video_url)
                                <div class="ratio ratio-16x9 mb-3">
                                    <video controls>
                                        <source src="{{ $course->video_url }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            @endif

                            <h5 class="fw-bold">{{ $course->title }}</h5>
                            <p class="text-muted">{{ $course->description }}</p>

                            <p>
                                <span class="badge bg-primary-subtle text-primary">{{ $course->category }}</span>
                            </p>

                            <p class="text-muted mb-0">
                                <i class="far fa-calendar me-1"></i> 
                                {{ $course->created_at->format('d M, Y') }}
                            </p>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->                                       
        </div><!-- container -->

        <!-- Footer -->
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
                                        Design with <i class="iconoir-heart-solid text-danger align-middle"></i>
                                        by Mannatthemes
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--end footer-->
    </div>
    <!-- end page content -->
</div>
@endsection
