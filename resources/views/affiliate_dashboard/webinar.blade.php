@extends('affiliate_dashboard.master_layout')
@section('content')

<div class="page-wrapper">
            <!-- Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                                <h4 class="page-title">Calendar</h4>
                                <div class="">
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="#">Mifty</a>
                                        </li><!--end nav-item-->
                                        <li class="breadcrumb-item"><a href="#">Apps</a>
                                        </li><!--end nav-item-->
                                        <li class="breadcrumb-item active">Calendar</li>
                                    </ol>
                                </div>                                
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-8">
                            <div class="card">
                                <div class="card-body">
                                    <div id='calendar'></div>
                                    <div style='clear:both'></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
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

                {{-- webinar video card --}}
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 h-30">
                              <svg style="width:0;height:0;position:absolute;" aria-hidden="true" focusable="false">
                                <linearGradient id="halfGradient">
                                    <stop offset="50%" stop-color="#FFD700" />
                                    <stop offset="50%" stop-color="rgba(255, 255, 255, 0.2)" />
                                </linearGradient>
                                </svg>

                                <div class="movie-card">
                                <div class="movie-img-container">
                                    <div class="movie-img" style="background-position: center;"></div>
                                    <div class="movie-overlay"></div>
                                </div>
                                <div class="movie-content">
                                    <div class="title-row">
                                    <h1 class="movie-title">Pulp Fiction <span class="year-badge">1994</span></h1>
                                    <span class="rating-badge">R</span>
                                    </div>

                                    <div class="metadata">
                                    <div class="duration">
                                        <svg class="duration-icon" viewBox="0 0 24 24">
                                        <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/>
                                        <path d="M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
                                        </svg>
                                        2h 34min
                                    </div>
                                    </div>

                                    <div class="genres">
                                    <span class="genre-tag">Crime</span>
                                    <span class="genre-tag">Drama</span>
                                    <span class="genre-tag">Black Comedy</span>
                                    </div>

                                    <div class="ratings-row">
                                    <div class="star-rating">
                                        <div class="stars">
                                        <svg class="star star-filled" viewBox="0 0 24 24">
                                            <path d="M12 2l2.4 7.4h7.6l-6 4.6 2.3 7-6.3-4.6-6.3 4.6 2.3-7-6-4.6h7.6z"/>
                                        </svg>
                                        <svg class="star star-filled" viewBox="0 0 24 24">
                                            <path d="M12 2l2.4 7.4h7.6l-6 4.6 2.3 7-6.3-4.6-6.3 4.6 2.3-7-6-4.6h7.6z"/>
                                        </svg>
                                        <svg class="star star-filled" viewBox="0 0 24 24">
                                            <path d="M12 2l2.4 7.4h7.6l-6 4.6 2.3 7-6.3-4.6-6.3 4.6 2.3-7-6-4.6h7.6z"/>
                                        </svg>
                                        <svg class="star star-filled" viewBox="0 0 24 24">
                                            <path d="M12 2l2.4 7.4h7.6l-6 4.6 2.3 7-6.3-4.6-6.3 4.6 2.3-7-6-4.6h7.6z"/>
                                        </svg>
                                        <svg class="star star-half" viewBox="0 0 24 24">
                                            <path d="M12 2l2.4 7.4h7.6l-6 4.6 2.3 7-6.3-4.6-6.3 4.6 2.3-7-6-4.6h7.6z"/>
                                        </svg>
                                        </div>
                                        <span class="rating-text">8.9/10</span>
                                    </div>

                                    <div class="likes">
                                        <svg class="heart-icon" viewBox="0 0 24 24">
                                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                                        </svg>
                                        <span class="likes-count">2.3M</span>
                                    </div>
                                    </div>

                                    <div class="description-section">
                                    <h5 class="section-title">SUMMARY</h5>
                                    <p class="movie-description" id="description">
                                        The lives of two mob hitmen, a boxer, With its nonlinear told out of chronological order.
                                    </p>
                                    </div>

                                    <div class="cast-section">
                                    <h5 class="section-title">HOSTS</h5>
                                    <div class="cast-list">
                                        <div class="cast-item">
                                        <img src="https://assets.codepen.io/406785/travolta.jpg" class="cast-photo" alt="" />
                                        <span class="cast-name">John Travolta</span>
                                        </div>
                                        <div class="cast-item">
                                        <img src="https://assets.codepen.io/406785/jackson.jpeg" class="cast-photo" alt="" />
                                        <span class="cast-name">Samuel L. Jackson</span>
                                        </div>
                                        <div class="cast-item">
                                        <img src="https://assets.codepen.io/406785/thurman.jpg" class="cast-photo" alt="" />
                                        <span class="cast-name">Uma Thurman</span>
                                        </div>
                                        <div class="cast-item">
                                        <img src="https://assets.codepen.io/406785/willis.jpeg" class="cast-photo" alt="" />
                                        <span class="cast-name">Bruce Willis</span>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="action-row">
                                    <div class="watch-btn">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="white">
                                        <path d="M8 5v14l11-7z"/>
                                        </svg>
                                        <span class="watch-btn-text">Join</span>
                                    </div>

                                    <div class="action-btn">
                                        <svg class="action-icon" viewBox="0 0 24 24">
                                        <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z"/>
                                        </svg>
                                    </div>

                                    <div class="action-btn">
                                        <svg class="action-icon" viewBox="0 0 24 24">
                                        <path d="M17 3H7c-1.1 0-1.99.9-1.99 2L5 21l7-3 7 3V5c0-1.1-.9-2-2-2z"/>
                                        </svg>
                                    </div>

                                    <div class="action-btn">
                                        <svg class="action-icon" viewBox="0 0 24 24">
                                        <path d="M15 4C12.8 4 11 5.8 11 8c0 2.2 1.8 4 4 4s4-1.8 4-4c0-2.2-1.8-4-4-4zm4.9 8.5c.6 1 .8 2.3.8 3.5 0 2.8-2.2 5-5 5h-5.4c-3.1 0-5.6-2.5-5.6-5.6V15c0-1.1.9-2 2-2h4.6c.3 0 .5.1.7.3.5.5.8 1.1.8 1.7v.3c0 .3-.3.6-.6.6h-1.5c-.5 0-.9.4-.9.9s.4.9.9.9h2.4c1.1 0 2.1-.5 2.8-1.2.4-.4 1.2-1.5 1.2-1.5M9 17c-.8 0-1.5-.7-1.5-1.5S8.2 14 9 14s1.5.7 1.5 1.5S9.8 17 9 17z"/>
                                        </svg>
                                    </div>
                                    </div>
                                </div>
                                </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end page content -->
            
        </div>
        <!-- end page-wrapper -->


@endsection