
@extends('admin_dashboard.master_layout')
@section('content')

<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="light" data-bs-theme="light">

    <head>
        

        <meta charset="utf-8" />
                <title>Profile</title>
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
                <meta content="" name="author" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css">



                <!-- App favicon -->
                <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" />

       
        <link href="{{ asset('assets/libs/tobii/css/tobii.min.css') }}" rel="stylesheet" type="text/css" />
         <!-- App css -->
         <link href="{{ asset('assets/css/affiliate/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
         <link href="{{ asset('assets/css/affiliate/icons.min.css') }}" rel="stylesheet" type="text/css" />
         <link href="{{ asset('assets/css/affiliate/app.min.css') }}" rel="stylesheet" type="text/css" />

<style>
    .modal-backdrop.show {
        background-color: rgba(0, 0, 0, 0.4) !important; /* हल्का dark */
    }
</style>

    </head>

    
    <!-- Top Bar Start -->
    <body>
    
  


        <div class="page-wrapper">

            <!-- Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                                <h4 class="page-title">Profile</h4>
                                                       
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-md-4">                            
                            <div class="card">  
                                <div class="card-body p-4  rounded text-center img-bg">                                   
                                </div><!--end card-body-->
                                <div class="position-relative">
                                    <div class="shape overflow-hidden text-card-bg">
                                        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="card-body mt-n6">
                                    <div class="row align-items-center">                                        
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                               <div class="position-relative">
    @if(Auth::user()->profile_image)
        <img src="{{ asset('storage/' . Auth::user()->profile_image) }}" 
             alt="Profile Image" 
             class="rounded-circle img-fluid" 
             style="width: 120px; height: 120px; object-fit: cover;">
    @else
        <img src="{{ asset('assets/images/users/avatar-5.jpg') }}" 
             alt="Default Avatar" 
             class="rounded-circle img-fluid" 
             style="width: 120px; height: 120px; object-fit: cover;">
    @endif
</div>

                                                <div class="flex-grow-1 text-truncate ms-3 align-self-end"> 
    <h5 class="m-0 fs-3 fw-bold">{{ $user->name }}</h5>
                                                                                                                           
</div><!--end media body-->
</div><!--end media-->

<div class="mt-3">
                                   

    <div class="text-muted mb-2 d-flex align-items-center">
        <i class="iconoir-mail-out fs-20 me-1"></i>
        <span class="text-body fw-semibold">Email :</span>
        <a href="mailto:{{ $user->email }}" class="text-primary text-decoration-underline">{{ $user->email }}</a>
    </div>

    <div class="text-body mb-3 d-flex align-items-center">
        <i class="iconoir-phone fs-20 me-1 text-muted"></i>
        <span class="text-body fw-semibold">Phone :</span>  {{ $user->mobile_number ?? 'N/A' }}
    </div>                                    

    <button type="button" class="btn btn-primary d-inline-block" data-bs-toggle="modal" data-bs-target="#uploadModal">Upload</button>

    
<form action="{{ route('profile.delete', $user->id) }}" method="POST" class="d-inline">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger"
        onclick="return confirm('Are you sure you want to delete this?')">
        Delete
    </button>
</form>

</div>

{{-- profile ka model ka code  --}}

<div class="modal fade" id="uploadModal" tabindex="-1" 
     aria-labelledby="uploadModalLabel" aria-hidden="true" 
     data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('profile.upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadModalLabel">Upload Profile Image</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="profileImage" class="form-label fw-bold">Choose Profile Image</label>
                        <input type="file" class="form-control" id="profileImage" name="profile_image" accept="image/*" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>


{{-- delete ka model --}}


<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.12.2/sweetalert2.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->  
                            </div><!--end card-->  
                                                   
                        </div> <!--end col--> 
                     
                    </div><!--end row--> 
                                                          
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
                <!--Start Footer-->
            
                
            
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        <!-- Javascript  -->  
        <!-- vendor js -->
        
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('assets/libs/tobii/js/tobii.min.js') }}"></script>
        <script src="{{ asset('assets/js/affiliate/pages/profile.init.js') }}"></script>
        <script src="{{ asset('assets/js/affiliate/app.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>




        @if(session('success'))
<script>
    document.addEventListener("DOMContentLoaded", function () {
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 2000
        });
    });
</script>
@endif

@if(session('error'))
<script>
    document.addEventListener("DOMContentLoaded", function () {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: "{{ session('error') }}",
        });
    });
</script>
@endif


    </body>
    <!--end body-->
</html>

@endsection