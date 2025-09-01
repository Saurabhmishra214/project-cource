@extends('admin_dashboard.master_layout')

@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-sm-6">
                    <h4 class="page-title">Live Webinars</h4>
                </div>
                <div class="col-sm-6 text-end">
                    <a href="{{ route('livewebinar.create') }}" class="btn btn-primary">
                        <i class="fa-solid fa-plus me-1"></i> Add Webinar
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="ol-12"> 
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Duration (min)</th>
                                            <th>Date</th>
                                            <th>Rating</th>
                                            <th>Likes</th>
                                            <th>Genres/Tags</th>
                                            <th class="text-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($webinars as $webinar)
                                            <tr>
                                                <td>{{ $webinar->webinar_id }}</td>
                                                <td>{{ $webinar->title }}</td>
                                                <td>{{ Str::limit($webinar->description, 50) }}</td>
                                                <td>{{ $webinar->duration_minutes }}</td>
                                                <td>{{ $webinar->webinar_date->format('Y-m-d') }}</td>
                                                <td>{{ $webinar->rating ?? 'NR' }}</td>
                                                <td>{{ $webinar->likes }}</td>
                                                <td>{{ $webinar->genres_tags }}</td>
                                                <td class="text-end">
                                                    {{-- Show --}}
                                                    <a href="{{ route('livewebinar.show', $webinar->webinar_id) }}" class="btn btn-sm btn-outline-primary me-1">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </a>
                                                    {{-- Edit --}}
                                                    <a href="{{ route('livewebinar.edit', $webinar->webinar_id) }}" class="btn btn-sm btn-outline-secondary me-1">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </a>
                                                    {{-- Delete --}}
                                                    <form action="{{ route('livewebinar.destroy', $webinar->webinar_id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to delete this webinar?');">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="9" class="text-center">No webinars found.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center mt-3">
                                    <ul class="pagination">
                                        {{-- Previous Page Link --}}
                                        @if ($webinars->onFirstPage())
                                            <li class="page-item disabled">
                                                <span class="page-link">Previous</span>
                                            </li>
                                        @else
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $webinars->previousPageUrl() }}" rel="prev">Previous</a>
                                            </li>
                                        @endif

                                        {{-- Pagination Elements --}}
                                        @foreach ($webinars->links()->elements[0] ?? [] as $page => $url)
                                            @if ($page == $webinars->currentPage())
                                                <li class="page-item active">
                                                    <span class="page-link">{{ $page }}</span>
                                                </li>
                                            @else
                                                <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                            @endif
                                        @endforeach

                                        {{-- Next Page Link --}}
                                        @if ($webinars->hasMorePages())
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $webinars->nextPageUrl() }}" rel="next">Next</a>
                                            </li>
                                        @else
                                            <li class="page-item disabled">
                                                <span class="page-link">Next</span>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--container-->
    </div><!--page-content-->
</div><!--page-wrapper-->

@if(session('success'))
<script>
    document.addEventListener("DOMContentLoaded", function () {
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: "{{ session('success') }}",
        });
    });
</script>
@endif

<!-- SweetAlert2 -->
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@endsection  