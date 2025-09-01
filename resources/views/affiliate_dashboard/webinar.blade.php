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
        @foreach($webinars as $webinar)
        <div class="col-sm-6 h-30">
            <svg style="width:0;height:0;position:absolute;" aria-hidden="true" focusable="false">
                <linearGradient id="halfGradient">
                    <stop offset="50%" stop-color="#FFD700" />
                    <stop offset="50%" stop-color="rgba(255, 255, 255, 0.2)" />
                </linearGradient>
            </svg>

            <div class="movie-card mt-4">
                <div class="movie-img-container">
                    <div class="movie-img" style="background-image: url('{{ $webinar->image_url }}'); background-position: center;"></div>
                    <div class="movie-overlay"></div>
                </div>

                <div class="movie-content">
                    <div class="title-row">
                        <h1 class="movie-title">{{ $webinar->title }}
                            <span class="year-badge">{{ \Carbon\Carbon::parse($webinar->webinar_date)->format('Y') }}</span>
                        </h1>
                        <span class="rating-badge">{{ $webinar->rating ?? 'NR' }}</span>
                    </div>

                    <div class="metadata">
                        <div class="duration">
                            <svg class="duration-icon" viewBox="0 0 24 24">
                                <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/>
                                <path d="M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
                            </svg>
                            {{ intval($webinar->duration_minutes / 60) }}h {{ $webinar->duration_minutes % 60 }}min
                        </div>
                    </div>

                    <div class="genres">
                        @if($webinar->genres_tags)
                            @foreach(explode(',', $webinar->genres_tags) as $tag)
                                <span class="genre-tag">{{ trim($tag) }}</span>
                            @endforeach
                        @endif
                    </div>

                    <div class="ratings-row">
                        <div class="star-rating">
                            <div class="stars">
                                @for($i=1; $i<=5; $i++)
                                    @if($i <= floor($webinar->rating / 2))
                                        <svg class="star star-filled" viewBox="0 0 24 24">
                                            <path d="M12 2l2.4 7.4h7.6l-6 4.6 2.3 7-6.3-4.6-6.3 4.6 2.3-7-6-4.6h7.6z"/>
                                        </svg>
                                    @elseif($i - 0.5 <= $webinar->rating / 2)
                                        <svg class="star star-half" viewBox="0 0 24 24">
                                            <path d="M12 2l2.4 7.4h7.6l-6 4.6 2.3 7-6.3-4.6-6.3 4.6 2.3-7-6-4.6h7.6z"/>
                                        </svg>
                                    @else
                                        <svg class="star star-empty" viewBox="0 0 24 24">
                                            <path d="M12 2l2.4 7.4h7.6l-6 4.6 2.3 7-6.3-4.6-6.3 4.6 2.3-7-6-4.6h7.6z"/>
                                        </svg>
                                    @endif
                                @endfor
                            </div>
                            <span class="rating-text">{{ $webinar->rating }}/10</span>
                        </div>

                        <div class="likes">
                            <svg class="heart-icon" viewBox="0 0 24 24">
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                            </svg>
                            <span class="likes-count">{{ $webinar->likes }}</span>
                        </div>
                    </div>

                    <div class="description-section">
                        <h5 class="section-title">SUMMARY</h5>
                        <p class="movie-description">{{ $webinar->description }}</p>
                    </div>

                    <div class="cast-section">
                        <h5 class="section-title">HOSTS</h5>
                        <div class="cast-list">
                            @php
                                $hosts = ['John Travolta','Samuel L. Jackson','Uma Thurman','Bruce Willis'];
                            @endphp
                            @foreach($hosts as $host)
                                <div class="cast-item">
                                    <img src="https://via.placeholder.com/50" class="cast-photo" alt="" />
                                    <span class="cast-name">{{ $host }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="action-row">
                        <div class="watch-btn">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="white">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                            <span class="watch-btn-text">Join</span>
                        </div>
                        <!-- बाकी action-btns remain same -->
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


            </div>
            <!-- end page content -->
            
        </div>
        <!-- end page-wrapper -->


@endsection