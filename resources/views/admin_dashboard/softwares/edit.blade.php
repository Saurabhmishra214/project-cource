@extends('admin_dashboard.master_layout')
@section('content')

 <div class="page-wrapper">


    <div class="page-content">
                <div class="container-fluid"> 
                  <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                            <h4 class="page-title">Softwares</h4>
                            <div class="">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="#">Mifty</a>
                                    </li><!--end nav-item-->
                                    <li class="breadcrumb-item"><a href="#">Forms</a>
                                    </li><!--end nav-item-->
                                    <li class="breadcrumb-item active">Validation</li>
                                </ol>
                            </div>                                
                        </div><!--end page-title-box-->
                    </div><!--end col-->
                </div><!--end row-->                   
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                            <h4 class="card-title">Update Software Entry</h4>
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body pt-0">
                                    <form class="row g-3 needs-validation was-validated" 
                                        method="POST" 
                                        action="{{ route('software.update', $softwares->software_id) }}" 
                                        novalidate
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <div class="col-md-6">
                                            <label class="form-label">Product Name</label>
                                            <input type="text" 
                                                class="form-control @error('Software Name') is-invalid @enderror" 
                                                name="software_name" 
                                                value="{{ old('software_name', $softwares->software_name) }}" 
                                                required>
                                            @error('software_name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Image</label>
                                            <input type="file" 
                                                class="form-control @error('file') is-invalid @enderror" 
                                                name="software_image_url" 
                                                value="{{ old('software_image_url', $softwares->software_image_url) }}" 
                                                required>
                                            @error('software_image_url')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Google Drive Link</label>
                                            <input type="text" 
                                                class="form-control @error('Google drive link') is-invalid @enderror" 
                                                name="google_drive_link" 
                                                value="{{ old('google_drive_link', $softwares->google_drive_link) }}" 
                                                required>
                                            @error('google_drive_link')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Sales Page URL</label>
                                            <input type="text" 
                                                class="form-control @error('URL') is-invalid @enderror" 
                                                name="sales_page_url" 
                                                value="{{ old('sales_page_url', $softwares->sales_page_url) }}" 
                                                required>
                                            @error('sales_page_url')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Description</label>
                                            <textarea 
                                                class="form-control @error('description') is-invalid @enderror" 
                                                name="description" 
                                                required>{{ old('description', $softwares->description) }}</textarea>
                                            @error('description')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>


                                        <div class="col-md-6">
                                            <label class="form-label">Price</label>
                                            <input type="text" 
                                                class="form-control @error('URL') is-invalid @enderror" 
                                                name="price" 
                                                value="{{ old('price', $softwares->price) }}" 
                                                required>
                                            @error('price')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Title</label>
                                            <input type="text" 
                                                class="form-control @error('URL') is-invalid @enderror" 
                                                name="title" 
                                                value="{{ old('title', $softwares->title) }}" 
                                                required>
                                            @error('title')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        {{-- <div class="col-md-6">
                                            <label class="form-label">Pay</label>
                                            <input type="text" 
                                                class="form-control @error('pay') is-invalid @enderror" 
                                                name="pay" 
                                                value="{{ old('pay') }}" 
                                                required>
                                            @error('pay')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div> --}}

                                        {{-- <div class="col-md-6">
                                            <label class="form-label">Duration</label>
                                            <input type="text" 
                                                class="form-control @error('duration') is-invalid @enderror" 
                                                name="duration" 
                                                value="{{ old('duration') }}" 
                                                required>
                                            @error('duration')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div> --}}

                                        <div class="col-12">
                                            <button class="btn btn-primary" type="submit">UPDATE</button>
                                        </div>
                                    </form>
          
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
                <!--end Rightbar-->
                {{-- <!--Start Footer-->
                
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
                
                <!--end footer--> --}}
            </div>

 </div>




@endsection