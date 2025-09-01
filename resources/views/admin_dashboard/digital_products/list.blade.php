@extends('admin_dashboard.master_layout')

@section('content')


<div class="page-wrapper">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                        <h4 class="page-title">Digital Products</h4>
                        <div class="">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Mifty</a></li>
                                <li class="breadcrumb-item"><a href="#">Digital Products</a></li>
                                <li class="breadcrumb-item active">Products List</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title">Products List</h4>
                            <a href="{{ route('digitalproduct.add') }}" class="btn btn-primary">
                                <i class="fa-solid fa-plus me-1"></i> Add Products
                            </a>
                        </div>

                        <div class="card-body pt-0">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Product Name</th>
                                            <th>Product Image</th>
                                            <th>Sales Page url</th>
                                            <th>Google Drive Link</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($products as $product)
                                            <tr>
                                                <td>{{ $product->product_id }}</td>
                                                <td>{{ $product->product_name }}</td>
                                                <td>{{ $product->product_image_url }}</td>
                                                <td>{{ $product->sales_page_url }}</td>
                                                <td>{{ $product->google_drive_link }}</td>
                                                <td class="text-end">
                                                    {{-- <a href="{{ route('digitalproduct.details', $product->id) }}" class="btn btn-sm btn-outline-primary me-1">
                                                        <i class="fa-solid fa-eye fs-6"></i>
                                                    </a> --}}
                                                    <a href="{{ route('digitalproduct.edit', $product->product_id) }}" class="btn btn-sm btn-outline-secondary me-1">
                                                        <i class="fa-solid fa-pen-to-square fs-6"></i>
                                                    </a>
                                                    <form action="{{ route('digitalproduct.delete', $product->product_id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to delete this training?');">
                                                            <i class="fa-solid fa-trash fs-6"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">No Trainings Found.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center mt-3">
                                    <ul class="pagination">
                                        {{-- Previous Page Link --}}
                                        @if ($products->onFirstPage())
                                            <li class="page-item disabled">
                                                <span class="page-link">Previous</span>
                                            </li>
                                        @else
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $products->previousPageUrl() }}" rel="prev">Previous</a>
                                            </li>
                                        @endif

                                        {{-- Pagination Elements --}}
                                        @foreach ($products->links()->elements[0] ?? [] as $page => $url)
                                            @if ($page == $products->currentPage())
                                                <li class="page-item active">
                                                    <span class="page-link">{{ $page }}</span>
                                                </li>
                                            @else
                                                <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                            @endif
                                        @endforeach

                                        {{-- Next Page Link --}}
                                        @if ($products->hasMorePages())
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $products->nextPageUrl() }}" rel="next">Next</a>
                                            </li>
                                        @else
                                            <li class="page-item disabled">
                                                <span class="page-link">Next</span>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

<!-- SweetAlert2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


@endsection
