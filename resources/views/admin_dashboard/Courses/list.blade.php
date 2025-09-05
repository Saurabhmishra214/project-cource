@extends('admin_dashboard.master_layout')

@section('content')


    <div class="page-wrapper">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                            <h4 class="page-title">Contacts</h4>
                            <div class="">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="#">Mifty</a></li>
                                    <li class="breadcrumb-item"><a href="#">Apps</a></li>
                                    <li class="breadcrumb-item active">Contacts</li>
                                </ol>
                            </div>
                        </div><!--end page-title-box-->
                    </div><!--end col-->
                </div><!--end row-->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Courses List</h4>
                                    </div><!--end col-->
                                    <div class="col-auto">
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
                                            </div><!--end col-->
                                            <div class="col-auto">
<a href="{{ route('courses.add') }}" 
   class="btn btn-primary" 
 >
   <i class="fa-solid fa-plus me-1"></i> Add Contact
</a>
                                            </div><!--end col-->
                                        </form>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                                       
                                        <div class="datatable-container">
                                            <table class="table mb-0 checkbox-all datatable-table" id="datatable_1">
                                                <thead>
                                                    <tr>
                                                        {{-- <th style="width: 16px; width: 4.358552631578947%;">
                                                            <button class="">
                                                                <div class="form-check mb-0 ms-n1">
                                                                    <input type="checkbox" class="form-check-input" name="select-all" id="select-all">
                                                                </div>
                                                            </button>
                                                        </th> --}}
                                                        <th class="ps-0" data-sortable="true"><button class="datatable-sorter">Id</button></th>
                                                        <th class="ps-0" data-sortable="true"><button class="datatable-sorter">Title</button></th>
                                                        <th data-sortable="true"><button class="datatable-sorter">Video URL</button></th>
                                                        <th data-sortable="true"><button class="datatable-sorter">Category</button></th>
                                                        <th data-sortable="true"><button class="datatable-sorter">Link</button></th>
                                                        <th class="text-end" data-sortable="true"><button class="datatable-sorter">Action</button></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- यहाँ से डायनामिक डेटा शुरू होता है -->
                                                    @forelse($courses as $course)
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" name="check" id="customCheck-{{ $course->id }}">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <p class="d-inline-block align-middle mb-0">
                                                                    <span class="font-13 fw-medium">{{ $course->title }}</span>
                                                                </p>
                                                            </td>
                                                            <td>{{ $course->video_url }}</td>
                                                            <td>{{ $course->category }}</td>
                                                            <td><a href="{{ $course->link }}" target="_blank" class="d-inline-block align-middle mb-0 text-body">Go to Link</a></td>
                                                        <td class="text-end">
    {{-- Show Button --}}
    <a href="{{ route('courses.view', $course->id) }}" class="btn btn-sm btn-outline-primary me-1">
        <i class="fa-solid fa-eye fs-6"></i>
    </a>

    {{-- Edit Button --}}
    <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-sm btn-outline-secondary me-1">
        <i class="fa-solid fa-pen-to-square fs-6"></i>
    </a>

    {{-- Delete Button --}}
    <form action="{{ route('courses.delete', $course->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to delete this course?');">
            <i class="fa-solid fa-trash fs-6"></i>
        </button>
    </form>
</td>

                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="7" class="text-center">No data found.</td>
                                                        </tr>
                                                    @endforelse
                                                    <!-- यहाँ डायनामिक डेटा समाप्त होता है -->
                                                </tbody>
                                            </table>
                                            <div class="d-flex justify-content-center mt-3">
                                    <ul class="pagination">
                                        {{-- Previous Page Link --}}
                                        @if ($courses->onFirstPage())
                                            <li class="page-item disabled">
                                                <span class="page-link">Previous</span>
                                            </li>
                                        @else
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $courses->previousPageUrl() }}" rel="prev">Previous</a>
                                            </li>
                                        @endif

                                        {{-- Pagination Elements --}}
                                        @foreach ($courses->links()->elements[0] ?? [] as $page => $url)
                                            @if ($page == $courses->currentPage())
                                                <li class="page-item active">
                                                    <span class="page-link">{{ $page }}</span>
                                                </li>
                                            @else
                                                <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                            @endif
                                        @endforeach

                                        {{-- Next Page Link --}}
                                        @if ($courses->hasMorePages())
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $courses->nextPageUrl() }}" rel="next">Next</a>
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
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div><!-- container -->

            <!--Offcanvas for Appearance -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
                <div class="offcanvas-header border-bottom justify-content-between">
                    <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
                    <button type="button" class="btn-close text-reset p-0 m-0 align-self-center" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <h6>Account Settings</h6>
                    <div class="p-2 text-start mt-3">
                        <div class="form-check form-switch mb-2">
                            <input class="form-check-input" type="checkbox" id="settings-switch1">
                            <label class="form-check-label" for="settings-switch1">Auto updates</label>
                        </div><!--end form-switch-->
                        <div class="form-check form-switch mb-2">
                            <input class="form-check-input" type="checkbox" id="settings-switch2" checked="">
                            <label class="form-check-label" for="settings-switch2">Location Permission</label>
                        </div><!--end form-switch-->
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="settings-switch3">
                            <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
                        </div><!--end form-switch-->
                    </div><!--end /div-->
                    <h6>General Settings</h6>
                    <div class="p-2 text-start mt-3">
                        <div class="form-check form-switch mb-2">
                            <input class="form-check-input" type="checkbox" id="settings-switch4">
                            <label class="form-check-label" for="settings-switch4">Show me Online</label>
                        </div><!--end form-switch-->
                        <div class="form-check form-switch mb-2">
                            <input class="form-check-input" type="checkbox" id="settings-switch5" checked="">
                            <label class="form-check-label" for="settings-switch5">Status visible to all</label>
                        </div><!--end form-switch-->
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="settings-switch6">
                            <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
                        </div><!--end form-switch-->
                    </div><!--end /div-->
                </div><!--end offcanvas-body-->
            </div>
            <!--end Rightbar/offcanvas-->

            <!-- Start Footer-->
            <footer class="footer text-center text-sm-start d-print-none">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-0 rounded-bottom-0">
                                <div class="card-body">
                                    <p class="text-muted mb-0">
                                        ©
                                        <script> document.write(new Date().getFullYear()) </script>2025
                                        Mifty
                                        <span class="text-muted d-none d-sm-inline-block float-end">
                                            Design with
                                            <i class="iconoir-heart-solid text-danger align-middle"></i>
                                            by Mannatthemes</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!--end footer-->

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
