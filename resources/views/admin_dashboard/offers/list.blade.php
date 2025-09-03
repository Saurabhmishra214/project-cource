@extends('admin_dashboard.master_layout')

@section('content')


<div class="page-wrapper">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                        <h4 class="page-title">Offers</h4>
                        <div class="">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Mifty</a></li>
                                <li class="breadcrumb-item"><a href="#">Gamify</a></li>
                                <li class="breadcrumb-item active">Offers List</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title">Offers List</h4>
                            <a href="{{ route('offer.add') }}" class="btn btn-primary">
                                <i class="fa-solid fa-plus me-1"></i> Add Offers
                            </a>
                        </div>

                        <div class="card-body pt-0">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Provider Name</th>
                                            <th>Subtitle</th>
                                            <th>Offer in %</th>
                                            <th>Offer in Amount</th>
                                            <th>Description</th>
                                            <th>Coupon Code</th>
                                            <th>Brand Logo</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($offers as $offer)
                                            <tr>
                                                <td>{{ $offer->id }}</td>
                                                <td>{{ $offer->offer_provider_name }}</td>
                                                <td>{{ $offer->subtitle }}</td>
                                                <td>{{ $offer->offer_percent }}</td>
                                                <td>{{ $offer->offer_amount }}</td>
                                                <td>{{ $offer->description }}</td>
                                                <td>{{ $offer->coupon_code }}</td>
                                                <td>{{ $offer->brand_logo }}</td>
                                                <td class="text-end">
                                                    {{-- <a href="{{ route('digitalproduct.details', $offer->id) }}" class="btn btn-sm btn-outline-primary me-1">
                                                        <i class="fa-solid fa-eye fs-6"></i>
                                                    </a>  --}}
                                                   <a href="{{ route('offer.edit', $offer->id) }}" class="btn btn-sm btn-outline-secondary me-1">
                                                        <i class="fa-solid fa-pen-to-square fs-6"></i>
                                                    </a>
                                                     <form action="{{ route('offer.delete', $offer->id) }}" method="POST" style="display:inline;">
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
                                                <td colspan="6" class="text-center">No Challenge Found.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center mt-3">
                                    <ul class="pagination">
                                        {{-- Previous Page Link --}}
                                        @if ($offers->onFirstPage())
                                            <li class="page-item disabled">
                                                <span class="page-link">Previous</span>
                                            </li>
                                        @else
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $offers->previousPageUrl() }}" rel="prev">Previous</a>
                                            </li>
                                        @endif

                                        {{-- Pagination Elements --}}
                                        @foreach ($offers->links()->elements[0] ?? [] as $page => $url)
                                            @if ($page == $offers->currentPage())
                                                <li class="page-item active">
                                                    <span class="page-link">{{ $page }}</span>
                                                </li>
                                            @else
                                                <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                            @endif
                                        @endforeach

                                        {{-- Next Page Link --}}
                                        @if ($offers->hasMorePages())
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $offers->nextPageUrl() }}" rel="next">Next</a>
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
