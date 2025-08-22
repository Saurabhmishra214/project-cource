@extends('frontend.master_layout')
@section('content')
    
    <section id="section-hero" class="section-dark text-light jarallax relative">
            <div class="gradient-edge-top op-6 h-50 color"></div>
            {{-- <div class="gradient-edge-bottom"></div> --}}
            <div class="sw-overlay op-8"></div>

            <div class="container py-5">
                <div class="card shadow-lg">
                    <img src="{{ asset('assets/images/affiliate/extra/card/img-1.jpg') }}" class="card-img-top" alt="Blog Image">

                    <div class="card-body">
                        <span class="badge bg-purple-subtle text-purple px-2 py-1 fw-semibold">
                            {{-- {{ $blog->category ?? 'General' }} --}} Hi
                        </span>
                        <p class="text-muted">
                            {{-- {{ $blog->created_at->format('d M Y') }} --}} 15 Sep 2024
                        </p>

                        <h2 class="fw-bold">
                            {{-- {{ $blog->title }} --}}Title of the Blog
                        </h2>
                        <p class="text-muted">
                            {{-- {{ $blog->description }} --}} This is a sample description of the blog post. It provides an overview of the content and engages the reader to continue reading.
                        </p>

                        <hr>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/images/users/avatar-10.jpg') }}" alt="" class="thumb-md rounded-circle me-2">
                            <div>
                                <h6 class="mb-0">
                                    {{-- {{ $blog->author ?? 'Admin' }} --}}Duncan
                                </h6>
                                <small class="text-muted">by <a href="#">
                                    {{-- {{ $blog->posted_by ?? 'admin' }} --}} admin
                                </a></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


    </section>

@endsection