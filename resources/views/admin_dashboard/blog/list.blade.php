@extends('admin_dashboard.master_layout')

@section('content')


 <div class="page-wrapper">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                        <h4 class="page-title">Blogs</h4>
                        <div class="">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Mifty</a></li>
                                <li class="breadcrumb-item"><a href="#">Apps</a></li>
                                <li class="breadcrumb-item active">Blogs</li>
                            </ol>
                        </div>
                    </div></div></div><div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Blogs List</h4>
                                </div><div class="col-auto">
                                    <form class="row g-2">
                                        <div class="col-auto">
                                            <a class="btn bg-primary-subtle text-primary dropdown-toggle d-flex align-items-center arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false" data-bs-auto-close="outside">
                                                <i class="iconoir-filter-alt me-1"></i> Filter
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-start">
                                                <div class="p-2">
                                                    <div class="form-check mb-2">
                                                        <input type="checkbox" class="form-check-input" checked="" id="filter-all">
                                                        <label class="form-check-label" for="filter-all">All</label>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input type="checkbox" class="form-check-input" checked="" id="filter-one">
                                                        <label class="form-check-label" for="filter-one">New</label>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input type="checkbox" class="form-check-input" checked="" id="filter-two">
                                                        <label class="form-check-label" for="filter-two">Active</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" checked="" id="filter-three">
                                                        <label class="form-check-label" for="filter-three">Inactive</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><div class="col-auto">
                                            <a href="{{ route('blogs.create') }}" class="btn btn-primary">
                                                <i class="fa-solid fa-plus me-1"></i> Add Blog
                                            </a>
                                        </div></form>
                                </div></div></div><div class="card-body pt-0">
                            <div class="table-responsive">
                                <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                                    <div class="datatable-top">
                                        <div class="datatable-dropdown">
                                            <label>
                                                <select class="datatable-selector" name="per-page">
                                                    <option value="5">5</option>
                                                    <option value="10" selected="">10</option>
                                                    <option value="15">15</option>
                                                    <option value="20">20</option>
                                                    <option value="25">25</option>
                                                </select> entries per page
                                            </label>
                                        </div>
                                        <div class="datatable-search">
                                            <input class="datatable-input" placeholder="Search..." type="search" name="search" title="Search within table" aria-controls="datatable_1">
                                        </div>
                                    </div>
                                    <div class="datatable-container">
                                        <table class="table mb-0 checkbox-all datatable-table" id="datatable_1">
                                            <thead>
                                                <tr>
                                                    <th style="width: 16px; width: 4.358552631578947%;">
                                                        <button class="">
                                                            <div class="form-check mb-0 ms-n1">
                                                                <input type="checkbox" class="form-check-input" name="select-all" id="select-all">
                                                            </div>
                                                        </button>
                                                    </th>
                                                    <th class="ps-0" data-sortable="true"><button class="datatable-sorter">Title</button></th>
                                                    <th data-sortable="true"><button class="datatable-sorter">Category</button></th>
                                                    <th data-sortable="true"><button class="datatable-sorter">Content</button></th>
                                                    <th data-sortable="true"><button class="datatable-sorter">Published At</button></th>
                                                    <th class="text-end" data-sortable="true"><button class="datatable-sorter">Action</button></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($blogs as $blog)
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" name="check" id="customCheck-{{ $blog->id }}">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="d-inline-block align-middle mb-0">
                                                            <span class="font-13 fw-medium">{{ $blog->title }}</span>
                                                        </p>
                                                    </td>
                                                    <td>{{ $blog->category }}</td>
                                                    <td>
                                                        {{ \Illuminate\Support\Str::limit(strip_tags($blog->content), 50) }}
                                                    </td>
                                                    <td>{{ $blog->published_at }}</td>
                                                    <td class="text-end">
                                                        {{-- Show Button --}}
                                                        <a href="{{ route('blogs.show', $blog->id) }}" class="btn btn-sm btn-outline-primary me-1">
                                                            <i class="fa-solid fa-eye fs-6"></i>
                                                        </a>

                                                        {{-- Edit Button --}}
                                                        <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-sm btn-outline-secondary me-1">
                                                            <i class="fa-solid fa-pen-to-square fs-6"></i>
                                                        </a>

                                                        {{-- Delete Button --}}
                                                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to delete this blog?');">
                                                                <i class="fa-solid fa-trash fs-6"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td colspan="6" class="text-center">No blogs found.</td>
                                                </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="datatable-bottom">
                                        {{-- Add pagination links if needed here --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> </div> </div></div>
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

<!-- SweetAlert2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


@endsection
