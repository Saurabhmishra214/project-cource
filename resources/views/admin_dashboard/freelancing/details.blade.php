@extends('admin_dashboard.master_layout')
@section('content')
    

<div class="page-wrapper">

            <!-- Page Content-->
            <div class="page-content">
                <div class="container-fluid"> 
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                                <h4 class="page-title">{{ $job->title }} Detail</h4>
                                <div class="">
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="#">Mifty</a>
                                        </li><!--end nav-item-->
                                        <li class="breadcrumb-item"><a href="#">Ecommerce</a>
                                        </li><!--end nav-item-->
                                        <li class="breadcrumb-item active">Detail</li>
                                    </ol>
                                </div>                                
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Job Information</h4>                      
                                        </div><!--end col-->
                                        {{-- <div class="col-auto">                      
                                            <a href="" class="text-secondary"><i class="fas fa-pen me-1"></i> Edit</a>                 
                                        </div><!--end col--> --}}
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body pt-0">
                                    <div>
                                        <div class="d-flex justify-content-between mb-2">
                                          <p class="text-body fw-semibold"><i class="iconoir-profile-circle text-secondary fs-20 align-middle me-1"></i>Title :</p>
                                          <p class="text-body-emphasis fw-semibold">{{ $job->title }}</p>
                                        </div>
                                        <div class="d-flex justify-content-between mb-2">
                                            <p class="text-body fw-semibold"><i class="iconoir-people-tag text-secondary fs-20 align-middle me-1"></i>Company Name :</p>
                                            <p class="text-body-emphasis fw-semibold">{{ $job->company_name }}</p>
                                        </div>
                                        <div class="d-flex justify-content-between mb-2">
                                            <p class="text-body fw-semibold"><i class="iconoir-mail text-secondary fs-20 align-middle me-1"></i>Location :</p>
                                            <p class="text-body-emphasis fw-semibold">{{ $job->location }}</p>
                                        </div>
                                        <div class="d-flex justify-content-between mb-2">
                                            <p class="text-body fw-semibold"><i class="iconoir-dollar-circle text-secondary fs-20 align-middle me-1"></i>Pay :</p>
                                            <p class="text-body-emphasis fw-semibold">{{ $job->pay }}</p>
                                        </div>
                                        <div class="d-flex justify-content-between mb-2">
                                            <p class="text-body fw-semibold"><i class="iconoir-calendar text-secondary fs-20 align-middle me-1"></i>Duration :</p>
                                            <p class="text-body-emphasis fw-semibold">{{ $job->duration }}</p>
                                        </div>
                                        <div class="d-flex justify-content-between mb-2">
                                            <p class="text-body fw-semibold"><i class="iconoir-calendar text-secondary fs-20 align-middle me-1"></i>Posted on :</p>
                                            <p class="text-body-emphasis fw-semibold">{{ $job->created_at }}</p>
                                        </div>
                                        <div class="d-flex justify-content-between mb-2">
                                            <p class="text-body fw-semibold"><i class="iconoir-calendar text-secondary fs-20 align-middle me-1"></i>Posted by:</p>
                                            <p class="text-body-emphasis fw-semibold">{{ $job->author }}</p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p class="text-body fw-semibold">{{ $job->description }}</p>
                                            {{-- <p class="text-body-emphasis fw-semibold"><img src="assets/images/flags/baha_flag.jpg" alt="" class="thumb-sm rounded-circle d-inline-block me-1">
                                                718 Bingamon Branch Road <br> Central Valley, NY 10917
                                            </p> --}}
                                        </div>                                        
                                    </div>
                                </div><!--card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                        <div class="col-lg-7">                            
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Candidates list</h4>  
                                            {{-- <p class="mb-0 text-muted mt-1">15 March 2024 at 09:45 am from draft orders</p>                     --}}
                                        </div><!--end col-->
                                        <div class="col-auto">                      
                                            {{-- <button class="btn btn-primary"><i class="fas fa-plus me-1"></i> Add Item</button>                    --}}
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body pt-0">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead class="table-light">
                                              <tr>
                                                <th>Name</th>
                                                <th class="text-end">Email</th>
                                                <th class="text-end">Contact</th>
                                                <th class="text-end">Experience</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="assets/images/products/03.png" alt="" height="40" class="rounded me-1">
                                                        <p class="d-inline-block align-middle mb-0">
                                                            <span class="d-block align-middle mb-0 product-name text-body">Royal Purse</span>
                                                            <span class="text-muted font-13">Pure Lether 100%</span> 
                                                        </p>
                                                    </td>
                                                    <td class="text-end">$80</td>
                                                    <td class="text-end">3</td>                                                    
                                                    <td class="text-end">$240</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="assets/images/products/04.png" alt="" height="40" class="rounded me-1">
                                                        <p class="d-inline-block align-middle mb-0">
                                                            <span class="d-block align-middle mb-0 product-name text-body">Apple Watch</span>
                                                            <span class="text-muted font-13">Size-05 (Model 2021)</span> 
                                                        </p>
                                                    </td>
                                                    <td class="text-end">$100</td>
                                                    <td class="text-end">1</td>                                                    
                                                    <td class="text-end">$100</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="assets/images/products/06.png" alt="" height="40" class="rounded me-1">
                                                        <p class="d-inline-block align-middle mb-0">
                                                            <span class="d-block align-middle mb-0 product-name text-body">Cosco Vollyboll</span>
                                                            <span class="text-muted font-13">size-04 (Model 2021)</span> 
                                                        </p>
                                                    </td>
                                                    <td class="text-end">$20</td>
                                                    <td class="text-end">4</td>                                                    
                                                    <td class="text-end">$80</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="assets/images/products/05.png" alt="" height="40" class="rounded me-1">
                                                        <p class="d-inline-block align-middle mb-0">
                                                            <span class="d-block align-middle mb-0 product-name text-body">Reebok Shoes</span>
                                                            <span class="text-muted font-13">size-08 (Model 2021)</span> 
                                                        </p>
                                                    </td>
                                                    <td class="text-end">$50</td>
                                                    <td class="text-end">10</td>                                                    
                                                    <td class="text-end">$500</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="assets/images/products/01.png" alt="" height="40" class="rounded me-1">
                                                        <p class="d-inline-block align-middle mb-0">
                                                            <span class="d-block align-middle mb-0 product-name text-body">Morden Chair</span>
                                                            <span class="text-muted font-13">Size-Mediam (Model 2021)</span> 
                                                        </p>
                                                    </td>
                                                    <td class="text-end">$70</td>
                                                    <td class="text-end">2</td>                                                    
                                                    <td class="text-end">$140</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!--card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                        
                    </div> <!-- end row -->                                       
                </div><!-- container -->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->
@endsection