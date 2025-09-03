@extends('admin_dashboard.master_layout')
@section('content')

    <div class="page-wrapper">

            <!-- Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                                <h4 class="page-title">Users</h4>
                                <div class="">
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="#">Mifty</a>
                                        </li><!--end nav-item-->
                                        <li class="breadcrumb-item"><a href="#">Users</a>
                                        </li><!--end nav-item-->
                                        <li class="breadcrumb-item active">List</li>
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
                                            <h4 class="card-title">Users</h4>                      
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
                                                                <input type="checkbox" class="form-check-input" checked id="filter-all">
                                                                <label class="form-check-label" for="filter-all">
                                                                  All 
                                                                </label>
                                                            </div>
                                                            <div class="form-check mb-2">
                                                                <input type="checkbox" class="form-check-input" checked id="filter-one">
                                                                <label class="form-check-label" for="filter-one">
                                                                    New
                                                                </label>
                                                            </div>
                                                            <div class="form-check mb-2">
                                                                <input type="checkbox" class="form-check-input" checked id="filter-two">
                                                                <label class="form-check-label" for="filter-two">
                                                                    VIP
                                                                </label>
                                                            </div>
                                                            <div class="form-check mb-2">
                                                                <input type="checkbox" class="form-check-input" checked id="filter-three">
                                                                <label class="form-check-label" for="filter-three">
                                                                    Repeat
                                                                </label>
                                                            </div>
                                                            <div class="form-check mb-2">
                                                                <input type="checkbox" class="form-check-input" checked id="filter-four">
                                                                <label class="form-check-label" for="filter-four">
                                                                    Referral
                                                                </label>
                                                            </div>
                                                            <div class="form-check mb-2">
                                                                <input type="checkbox" class="form-check-input" checked id="filter-five">
                                                                <label class="form-check-label" for="filter-five">
                                                                    Inactive
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" checked id="filter-six">
                                                                <label class="form-check-label" for="filter-six">
                                                                    Loyal
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!--end col-->
                                                
                                                {{-- <div class="col-auto">
                                                  <button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#addBoard"><i class="fa-solid fa-plus me-1"></i> Add Product</button>
                                                </div><!--end col--> --}}
                                            </form>    
                                        </div><!--end col-->
                                    </div><!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body pt-0">
                                    
                                    <div class="table-responsive">
                                        <table class="table mb-0 checkbox-all" id="">
                                            <thead class="table-light">
                                              <tr>
                                                <th style="width: 16px;">
                                                    <div class="form-check mb-0 ms-n1">
                                                        <input type="checkbox" class="form-check-input" name="select-all" id="select-all">                                                    
                                                    </div>
                                                </th>
                                                <th class="ps-0">Name</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Referred By</th>
                                                <th>Last Login</th>
                                                <th class="text-end">Action</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($users as $user)
                                                <tr>
                                                    <td style="width: 16px;">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" name="check" id="check-{{ $user->id }}">
                                                        </div>
                                                    </td>
                                                    <td class="ps-0">
                                                        <img src="" 
                                                            alt="" class="thumb-md d-inline rounded-circle me-1">
                                                        <p class="d-inline-block align-middle mb-0">
                                                            <span class="font-13 fw-medium">{{ $user->name }}</span>
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="d-inline-block align-middle mb-0 text-body">{{ $user->email }}</a>
                                                    </td>
                                                    <td>
                                                        @php
                                                            $statusColors = [
                                                                'VIP' => 'bg-danger-subtle text-danger',
                                                                'Loyal' => 'bg-success-subtle text-success',
                                                                'Referral' => 'bg-success-subtle text-success',
                                                                'Inactive' => 'bg-secondary-subtle text-secondary',
                                                                'New' => 'bg-success-subtle text-success',
                                                                'Repeat' => 'bg-blue-subtle text-blue',
                                                                'Potential' => 'bg-success-subtle text-success'
                                                            ];
                                                            $statusClass = $statusColors[$user->status] ?? 'bg-secondary-subtle text-secondary';
                                                        @endphp
                                                        <span class="badge {{ $statusClass }}">{{ $user->status }}</span>
                                                    </td>
                                                    <td>{{ $user->referred_by ?? '-' }}</td>
                                                    <td>{{ $user->last_login_at ? $user->last_login_at->format('d M, Y H:i') : '-' }}</td>
                                                    <td class="text-end">
                                                        <a href="{{ route('admin.user.details', $user->id)}}"><i class="las la-info-circle text-secondary fs-18"></i></a>
                                                        {{-- <a href="{{ route('users.edit', $user->id) }}"><i class="las la-pen text-secondary fs-18"></i></a> --}}
                                                        {{-- <a href="{{ route('admin.user.delete', $user->id) }}" onclick="return confirm('Are you sure?')">
                                                            <i class="las la-trash-alt text-secondary fs-18"></i>
                                                        </a> --}}
                                                        <form action="{{ route('admin.user.delete', $user->id) }}" method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" onclick="return confirm('Are you sure you want to delete this user's data ?');">
                                                                <i class="las la-trash-alt text-secondary fs-18"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->                                     
                </div><!-- container -->
                
                <!--Start Rightbar-->
                <!--Start Rightbar/offcanvas-->
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
                                <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
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
                                <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
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
                <!--end Rightbar-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

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