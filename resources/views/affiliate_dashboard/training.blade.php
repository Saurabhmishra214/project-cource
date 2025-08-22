@extends('affiliate_dashboard.master_layout')

@section('content')

<!-- Pop-up Video Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content bg-dark">
            <div class="modal-header border-0">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="ratio ratio-16x9">
                    <!-- वीडियो यहाँ लोड होगा -->
                    <iframe id="videoPlayer" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-wrapper">
    <!-- Page Content-->
    <div class="page-content">
        <div class="container-fluid">
            <!-- Greeting -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                        <h4 class="page-title">Hello, <span class="text-primary">John</span></h4>
                        <div class="d-flex align-items-center gap-2">
                            <button class="btn btn-soft-primary" data-category="10 Days Training">10 Days Training</button>
                            <button class="btn btn-outline-light" data-category="All Time Trainings">All Time Trainings</button>
                            <button class="btn btn-outline-light" data-category="Live Webinar">Webinars</button>
                            <select class="form-select form-select-sm ms-2">
                                <option>Select Language</option>
                                <option>English</option>
                                <option>Hindi</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Training Tabs (Dynamic) -->
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <ul class="nav justify-content-center nav-tabs border-0 fw-bold fs-5" id="training-days">
                        <!-- Tabs will be populated dynamically -->
                    </ul>
                </div>
            </div>

            <!-- Video Section (Static Thumbnail) -->
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="card bg-dark text-center shadow">
                        <div class="card-body p-0">
                            <!-- YouTube वीडियो थंबनेल जो क्लिक करने पर पॉपअप खोलेगा -->
                            <div class="position-relative" style="cursor: pointer;" id="main-video-thumbnail">
                                <img src="https://img.youtube.com/vi/dQw4w9WgXcQ/maxresdefault.jpg" class="img-fluid rounded" alt="Video Thumbnail">
                                <!-- प्ले बटन ओवरले -->
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

            <!-- Intro Text (Static) -->
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

            <!-- Playlist (Dynamic) -->
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            <h5 class="mb-0" id="playlist-header">Playlist</h5>
                        </div>
                        <div class="card-body" id="playlist-section">
                            <!-- Playlist items will be populated dynamically -->
                            <p class="text-muted text-center">Loading playlist...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- container-fluid -->
    </div><!-- page-content -->
</div><!-- page-wrapper -->

<script>
document.addEventListener("DOMContentLoaded", function () {
    const trainingTabsContainer = document.getElementById("training-days");
    const playlistHeader = document.getElementById("playlist-header");
    const playlistSection = document.getElementById("playlist-section");
    const categoryButtons = document.querySelectorAll('.page-title-box button');

    // वीडियो पॉपअप के लिए तत्व
    const videoModal = document.getElementById('videoModal');
    const videoPlayer = document.getElementById('videoPlayer');
    const mainVideoThumbnail = document.getElementById('main-video-thumbnail');
    
    // यहाँ एक स्थिर YouTube वीडियो ID है। इसे आप बाद में बदल सकते हैं।
    const mainVideoId = 'dQw4w9WgXcQ'; // यह एक टेस्टिंग वीडियो है।

    // PHP से पास किए गए डेटा का उपयोग करें।
    const allTrainingsData = @json($trainings);

    // यह फ़ंक्शन पॉपअप खोलता है और वीडियो लोड करता है
    function openVideoModal(videoId) {
        const embedUrl = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
        videoPlayer.src = embedUrl;
        var modal = new bootstrap.Modal(videoModal);
        modal.show();
    }
    
    // जब पॉपअप बंद हो जाए, तो वीडियो को रोक दें
    videoModal.addEventListener('hidden.bs.modal', function (e) {
        videoPlayer.src = '';
    });
    
    // थंबनेल पर क्लिक करने पर पॉपअप खोलें
    mainVideoThumbnail.addEventListener('click', function() {
        openVideoModal(mainVideoId);
    });

    /**
     * यह फ़ंक्शन सही कैटेगरी के आधार पर UI को अपडेट करता है।
     */
    function displayCategory(category) {
        const trainings = allTrainingsData[category];
        if (!trainings || trainings.length === 0) {
            trainingTabsContainer.innerHTML = '';
            // मुख्य वीडियो सेक्शन को प्रभावित नहीं करता
            playlistSection.innerHTML = `<p class="text-muted text-center">No playlist available.</p>`;
            playlistHeader.innerText = 'Playlist';
            return;
        }

        // टैब बनाएं
        trainingTabsContainer.innerHTML = '';
        if (category === '10 Days Training') {
            trainings.forEach((training, index) => {
                const isActive = index === 0 ? 'active text-primary' : '';
                trainingTabsContainer.innerHTML += `
                    <li class="nav-item">
                        <a href="#" class="nav-link ${isActive}" data-training-id="${training.id}">Day ${training.day_number}</a>
                    </li>
                `;
            });
        }

        // डिफ़ॉल्ट रूप से पहला वीडियो और प्लेलिस्ट लोड करें
        if (trainings.length > 0) {
            const firstTraining = trainings[0];
            updatePlaylist(firstTraining.sessions, firstTraining.title);
        }
    }

    /**
     * यह फ़ंक्शन प्लेलिस्ट सेक्शन को अपडेट करता है।
     */
    function updatePlaylist(sessions, trainingTitle) {
        playlistHeader.innerText = `${trainingTitle} Playlist`;
        playlistSection.innerHTML = '';
        if (sessions.length === 0) {
            playlistSection.innerHTML = `<p class="text-muted text-center">No playlist sessions available for this training.</p>`;
            return;
        }

        sessions.forEach(session => {
            playlistSection.innerHTML += `
                <div class="d-flex align-items-center justify-content-between mb-3 p-2 rounded bg-light playlist-item"
                     data-video-url="${session.session_video_url}" data-title="${session.title}">
                    <div class="d-flex align-items-center">
                        <img src="${session.image_url}" class="rounded me-3" alt="${session.title} thumbnail">
                        <h6 class="mb-0">${session.title}</h6>
                    </div>
                    <a href="${session.session_video_url}" target="_blank" class="btn btn-sm btn-soft-primary begin-session-btn">Begin Session</a>
                </div>
            `;
        });
        
        attachEventListeners();
    }

    /**
     * यह फ़ंक्शन सभी इवेंट लिसनर्स को जोड़ता है।
     */
    function attachEventListeners() {
        // टैब के लिए इवेंट लिसनर
        const tabs = document.querySelectorAll("#training-days .nav-link");
        tabs.forEach(tab => {
            tab.addEventListener("click", function (e) {
                e.preventDefault();
                tabs.forEach(t => t.classList.remove("active", "text-primary"));
                this.classList.add("active", "text-primary");
                
                const trainingId = this.getAttribute('data-training-id');
                const selectedTraining = allTrainingsData['10 Days Training'].find(t => t.id == trainingId);

                if (selectedTraining) {
                    updatePlaylist(selectedTraining.sessions, selectedTraining.title);
                }
            });
        });

        // कैटेगरी बटन के लिए इवेंट लिसनर
        categoryButtons.forEach(button => {
            button.addEventListener('click', function() {
                const category = this.getAttribute('data-category');
                categoryButtons.forEach(btn => btn.classList.remove('btn-soft-primary'));
                categoryButtons.forEach(btn => btn.classList.add('btn-outline-light'));
                this.classList.remove('btn-outline-light');
                this.classList.add('btn-soft-primary');
                displayCategory(category);
            });
        });
    }

    // पेज लोड होने पर डिफ़ॉल्ट कैटेगरी दिखाएं
    displayCategory('10 Days Training');
});
</script>
@endsection
