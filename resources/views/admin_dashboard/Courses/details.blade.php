@extends('admin_dashboard.master_layout')

@section('content')
<div class="page-wrapper">
    <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                                <h4 class="page-title">{{ $course->title }}</h4>
                                <div class="">
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="#">Mifty</a>
                                        </li><!--end nav-item-->
                                        <li class="breadcrumb-item"><a href="#">Pages</a>
                                        </li><!--end nav-item-->
                                        {{-- <li class="breadcrumb-item active">Profile</li> --}}
                                    </ol>
                                </div>                                
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <div class="row">
                        
                                
                                
                            
                                                             
                            </div><!--end row-->
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="post" role="tabpanel"> 
                                    <div class="row">
                                         
                                        <div class="col-12">                                            
                                            <div class="card">
                                                <div class="card-body">                                                                                          
                                                    {{-- <img src="assets/images/extra/card/post-1.jpg" alt="" class="img-fluid"> --}}
                                                    <div class="card">
                                                        {{-- <div class="card-header">
                                                            <div class="row align-items-center">
                                                                <div class="col">                      
                                                                    <h4 class="card-title">Ratio Video 16:9</h4>                      
                                                                </div><!--end col-->
                                                            </div>  <!--end row-->                                  
                                                        </div><!--end card-header--> --}}
                                                        <div class="card-body pt-0">
                                                            <!-- 16:9 aspect ratio -->
                                                            <div class="ratio ratio-16x9">
                                                                <video src="{{ $course->image_url }}"></video>
                                                            </div>  
                                                        </div><!--end card-body--> 
                                                    </div><!--end card--> 
                                                    <div class="post-title mt-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <span class="badge bg-primary-subtle text-primary">{{ $course->category }}</span>
                                                            </div><!--end col-->
                                                            <div class="col-auto">
                                                                <span class="text-muted"><i class="far fa-calendar me-1"></i>{{ $course->created_at }}</span>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                       
                                                        <h5 href="#" class="fs-20 fw-bold d-block my-3">{{ $course->title }}</h5>
                                                        <span class="fs-15 bg-light py-2 px-3 rounded">{{ $course->description}}</span>
                                                        <p class="fs-15 mt-3"> 

                                                        </p>
                                                        {{-- <blockquote class="blockquote border-start ps-4">
                                                            <p class="fs-18"><i>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante."</i></p>
                                                            <footer class="blockquote-footer mt-1">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                                        </blockquote> --}}
                                                    </div>
                                                </div>
                                                <div class="card-body pt-0">
                                                    <div class="row mb-3">
                                                        <div class="col">
                                                            <p class="text-dark fw-semibold mb-0">Skills</p>
                                                        </div>
                                                    </div>
                                                    <span class="badge bg-light text-dark px-3 py-2 fw-semibold">Music</span>
                                                </div>
                                            </div>    
                                        </div><!--end col-->                                                
                                    </div><!--end row-->
                                </div>
            </div>
</div>

@endsection