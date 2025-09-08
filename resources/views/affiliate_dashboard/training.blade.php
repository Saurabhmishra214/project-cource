@extends('affiliate_dashboard.master_layout')

@section('content')

<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content bg-dark">
            <div class="modal-header border-0">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="ratio ratio-16x9">
                    <iframe id="videoPlayer" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-wrapper">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                        <h4 class="page-title">
                            Hello, <span class="text-primary">{{ Auth::user()->name }}</span>
                        </h4>
                        <div class="d-flex align-items-center gap-2">
                            {{-- <button class="btn btn-soft-primary" data-category="10 Days Training">10 Days Training</button>
                            <button class="btn btn-outline-light" data-category="All Time Trainings">All Time Trainings</button>
                            <button class="btn btn-outline-light" data-category="Live Webinar">Webinars</button> --}}
                            <select class="form-select form-select-sm ms-2">
                                <option>Select Language</option>
                                <option>English</option>
                                <option>Hindi</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-12 text-center">
                    <ul class="nav justify-content-center nav-tabs border-0 fw-bold fs-5" id="training-days">
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="card bg-dark text-center shadow">
                        <div class="card-body p-0">
                            <div class="position-relative" style="cursor: pointer;" id="main-video-thumbnail">
                                <img src="" class="img-fluid rounded" alt="Video Thumbnail">
                                <div class="position-absolute top-50 start-50 translate-middle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="white" class="bi bi-play-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-lg-10 mx-auto text-center">
                    <h2 class="fw-bold">Your Journey <span class="text-primary">Starts Here.</span></h2>
                    <p class="text-muted">
                        The 10-Day Training is your first real step into the world of IDIGITALPRENEUR.
                        Understand the vision, the tools, and the system that can change your life.
                        This 10 Days training will shape how you think, act, and succeed inside this ecosystem.
                        Don’t skip. Don’t rush. Absorb everything.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            <h5 class="mb-0" id="playlist-header">Playlist</h5>
                        </div>
                        <div class="card-body" id="playlist-section">
                            <p class="text-muted text-center">Loading playlist...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const trainingTabsContainer = document.getElementById("training-days");
    const playlistHeader = document.getElementById("playlist-header");
    const playlistSection = document.getElementById("playlist-section");
    const categoryButtons = document.querySelectorAll('.page-title-box button[data-category]');

    const videoModal = document.getElementById('videoModal');
    const videoPlayer = document.getElementById('videoPlayer');
    const mainVideoThumbnail = document.getElementById('main-video-thumbnail');
    
    // The training data is already available from the server side
    const allTrainingsData = @json($trainings);
    
    if (Object.keys(allTrainingsData).length === 0) {
        playlistSection.innerHTML = `<p class="text-muted text-center">No trainings found.</p>`;
        return;
    }
    
    // This function now directly uses a video ID
    function openVideoModal(videoId) {
        const embedUrl = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
        videoPlayer.src = embedUrl;
        var modal = new bootstrap.Modal(videoModal);
        modal.show();
    }
    
    // The getYouTubeVideoId function is no longer needed on the client-side as it is handled by the server
    // It's kept here for reference if needed
    function getYouTubeVideoId(url) {
        if (!url) {
            console.error("URL is null or undefined.");
            return null;
        }
        const regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
        const match = url.match(regExp);
        if (match && match[2] && match[2].length === 11) {
            return match[2];
        } else {
            console.error("Failed to extract YouTube video ID from URL:", url);
            return null;
        }
    }
    
    videoModal.addEventListener('hidden.bs.modal', function (e) {
        videoPlayer.src = '';
    });
    
    function displayCategory(category) {
        const trainings = allTrainingsData[category];
        
        categoryButtons.forEach(btn => {
            btn.classList.remove('btn-soft-primary');
            btn.classList.add('btn-outline-light');
        });

        const activeButton = document.querySelector(`.page-title-box button[data-category="${category}"]`);
        if (activeButton) {
            activeButton.classList.remove('btn-outline-light');
            activeButton.classList.add('btn-soft-primary');
        }

        if (!trainings || trainings.length === 0) {
            trainingTabsContainer.innerHTML = '';
            playlistSection.innerHTML = `<p class="text-muted text-center">No trainings found for this category.</p>`;
            playlistHeader.innerText = 'Playlist';
            return;
        }

        trainingTabsContainer.innerHTML = '';
        trainings.forEach((training, index) => {
            const isActive = index === 0 ? 'active' : '';
            const tabName = training.day_number ? `Day ${training.day_number}` : training.title;
            trainingTabsContainer.innerHTML += `
                <li class="nav-item">
                    <a href="#" class="nav-link ${isActive}" data-training-id="${training.id}">
                        ${tabName}
                    </a>
                </li>
            `;
        });
        
        const firstTraining = trainings[0];
        updatePlaylist(firstTraining);
        
        attachTabEventListeners();
    }

    function updatePlaylist(training) {
        const mainVideoId = getYouTubeVideoId(training.main_video_url);

        mainVideoThumbnail.onclick = function() {
            if (mainVideoId) {
                openVideoModal(mainVideoId);
            } else {
                alert('Main video URL is invalid or missing. Please check the link in the database.');
            }
        };

        // Update the main thumbnail image
        if (mainVideoId) {
            mainVideoThumbnail.querySelector('img').src = `https://img.youtube.com/vi/${mainVideoId}/maxresdefault.jpg`;
        }
        
        playlistHeader.innerText = `${training.title} Playlist`;
        playlistSection.innerHTML = '';

        const sessions = training.sessions;
        if (!sessions || sessions.length === 0) {
            playlistSection.innerHTML = `<p class="text-muted text-center">No sessions found for this training.</p>`;
            return;
        }

        sessions.forEach(session => {
            const videoId = getYouTubeVideoId(session.session_video_url);
            const imageUrl = videoId ? `https://img.youtube.com/vi/${videoId}/default.jpg` : (session.image_url || 'https://via.placeholder.com/100x60?text=No+Image');

            playlistSection.innerHTML += `
                <div class="d-flex align-items-center justify-content-between mb-3 p-2 rounded bg-light playlist-item"
                     style="cursor: pointer;"
                     data-video-id="${videoId}" data-title="${session.title}">
                    <div class="d-flex align-items-center">
                        <img src="${imageUrl}" class="rounded me-3" style="width: 100px; height: auto;" alt="${session.title} thumbnail">
                        <h6 class="mb-0">${session.title}</h6>
                    </div>
                    <button type="button" class="btn btn-sm btn-soft-primary begin-session-btn" data-video-id="${videoId}">Begin Session</button>
                </div>
            `;
        });

        attachSessionEventListeners();
    }
    
    function attachTabEventListeners() {
        const tabs = document.querySelectorAll("#training-days .nav-link");
        tabs.forEach(tab => {
            tab.addEventListener("click", function (e) {
                e.preventDefault();
                tabs.forEach(t => t.classList.remove("active"));
                this.classList.add("active");
                
                const trainingId = this.getAttribute('data-training-id');
                const selectedTraining = Object.values(allTrainingsData).flat().find(t => t.id == trainingId);

                if (selectedTraining) {
                    updatePlaylist(selectedTraining);
                }
            });
        });
    }

    function attachSessionEventListeners() {
        const sessionButtons = document.querySelectorAll('.begin-session-btn');
        sessionButtons.forEach(button => {
            button.addEventListener('click', function() {
                const videoId = this.getAttribute('data-video-id');
                if (videoId) {
                    openVideoModal(videoId);
                } else {
                    alert('This session video URL is invalid or missing. Please check the link in the database.');
                }
            });
        });
    }

    categoryButtons.forEach(button => {
        button.addEventListener('click', function() {
            const category = this.getAttribute('data-category');
            displayCategory(category);
        });
    });

    displayCategory('10 Days Training');
});
</script>
@endsection