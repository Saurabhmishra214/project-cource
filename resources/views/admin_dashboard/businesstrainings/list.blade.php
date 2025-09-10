@extends('admin_dashboard.master_layout')

@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                        <h4 class="page-title">Trainings List</h4>
                        <div>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Mifty</a></li>
                                <li class="breadcrumb-item"><a href="#">Apps</a></li>
                                <li class="breadcrumb-item active">Trainings</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div><!--end row-->

            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title">All Trainings</h4>
                            <a href="{{ route('businesstrainings.create') }}" class="btn btn-primary">
                                <i class="fa-solid fa-plus me-1"></i> Add Training
                            </a>
                        </div>

                        <div class="card-body pt-0">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Video URL</th>
                                            <th>Category</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($trainings as $training)
                                            <tr>
                                                <td>{{ $training->id }}</td>
                                                <td>{{ $training->title }}</td>
                                                <td>{{ $training->description }}</td>
                                                <td>{{ $training->main_video_url }}</td>
                                                <td>{{ $training->category }}</td>
                                                <td class="text-end">
                                                    {{-- Show --}}
                                                    <a href="{{ route('businesstrainings.view', $training->id) }}" 
                                                       class="btn btn-sm btn-outline-primary me-1">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </a>

                                                    {{-- Edit --}}
                                                    <a href="{{ route('businesstrainings.edit', $training->id) }}" 
                                                       class="btn btn-sm btn-outline-secondary me-1">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </a>

                                                    {{-- Lessons Add --}}
                                                    <a href="{{ route('training.lessons.add', $training->id) }}" class="btn btn-sm btn-outline-success me-1">
                                                        <i class="fa-solid fa-book-open fs-6"></i>
                                                    </a>

                                                    {{-- Delete --}}
                                                    <form action="{{ route('businesstrainings.destroy', $training->id) }}" 
                                                          method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-outline-danger" 
                                                                onclick="return confirm('Are you sure you want to delete this training?');">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">No trainings found.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center mt-3">
                                    <ul class="pagination">
                                        {{-- Previous Page Link --}}
                                        @if ($trainings->onFirstPage())
                                            <li class="page-item disabled">
                                                <span class="page-link">Previous</span>
                                            </li>
                                        @else
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $trainings->previousPageUrl() }}" rel="prev">Previous</a>
                                            </li>
                                        @endif

                                        {{-- Pagination Elements --}}
                                        @foreach ($trainings->links()->elements[0] ?? [] as $page => $url)
                                            @if ($page == $trainings->currentPage())
                                                <li class="page-item active">
                                                    <span class="page-link">{{ $page }}</span>
                                                </li>
                                            @else
                                                <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                            @endif
                                        @endforeach

                                        {{-- Next Page Link --}}
                                        @if ($trainings->hasMorePages())
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $trainings->nextPageUrl() }}" rel="next">Next</a>
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

                    </div>
                </div>
            </div><!--end row-->

        </div>
    </div>
</div>

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
