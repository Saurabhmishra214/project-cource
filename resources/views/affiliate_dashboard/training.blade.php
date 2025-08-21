@extends('affiliate_dashboard.master_layout')
@section('content')
    
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
                            <button class="btn btn-soft-primary">10 Days Training</button>
                            <button class="btn btn-outline-light">All Time Trainings</button>
                            <button class="btn btn-outline-light">Webinars</button>
                            <select class="form-select form-select-sm ms-2">
                                <option>Select Language</option>
                                <option>English</option>
                                <option>Hindi</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

         <!-- Training Tabs -->
        <div class="row mb-4">
            <div class="col-12 text-center">
                <ul class="nav justify-content-center nav-tabs border-0 fw-bold fs-5" id="training-days">
                    <li class="nav-item"><a href="#" class="nav-link active text-primary" data-day="1">Day 1</a></li>
                    <li class="nav-item"><a href="#" class="nav-link" data-day="2">Day 2</a></li>
                    <li class="nav-item"><a href="#" class="nav-link" data-day="3">Day 3</a></li>
                    <li class="nav-item"><a href="#" class="nav-link" data-day="4">Day 4</a></li>
                    <li class="nav-item"><a href="#" class="nav-link" data-day="5">Day 5</a></li>
                    <li class="nav-item"><a href="#" class="nav-link" data-day="6">Day 6</a></li>
                    <li class="nav-item"><a href="#" class="nav-link" data-day="7">Day 7</a></li>
                    <li class="nav-item"><a href="#" class="nav-link" data-day="8">Day 8</a></li>
                    <li class="nav-item"><a href="#" class="nav-link" data-day="9">Day 9</a></li>
                    <li class="nav-item"><a href="#" class="nav-link" data-day="10">Day 10</a></li>
                </ul>
            </div>
        </div>

        <!-- Video Section -->
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="card bg-dark text-center shadow">
                    <div class="card-body p-0" id="video-section">
                        <!-- Default video for Day 1 -->
                        <video class="w-100 rounded" height="400" controls 
                            poster="https://via.placeholder.com/1280x400?text=Day+1+Training">
                            <source src="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/Sintel.mp4" type="video/mp4">
                            Your browser does not support HTML video.
                        </video>
                    </div>
                </div>
            </div>
        </div>

            <!-- Intro Text -->
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

            <!-- Playlist -->
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            <h5 class="mb-0">Day 1 Playlist</h5>
                        </div>
                        <div class="card-body">
                            <!-- Item -->
                            <div class="d-flex align-items-center justify-content-between mb-3 p-2 rounded bg-light">
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/100x60" class="rounded me-3" alt="">
                                    <h6 class="mb-0">Your First Strong Step</h6>
                                </div>
                                <a href="#" class="btn btn-sm btn-soft-primary">Begin Session</a>
                            </div>
                            <!-- Item -->
                            <div class="d-flex align-items-center justify-content-between mb-3 p-2 rounded bg-light">
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/100x60" class="rounded me-3" alt="">
                                    <h6 class="mb-0">The Right Mindset</h6>
                                </div>
                                <a href="#" class="btn btn-sm btn-soft-primary">Begin Session</a>
                            </div>
                            <!-- Item -->
                            <div class="d-flex align-items-center justify-content-between mb-3 p-2 rounded bg-light">
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/100x60" class="rounded me-3" alt="">
                                    <h6 class="mb-0">Important Guidelines</h6>
                                </div>
                                <a href="#" class="btn btn-sm btn-soft-primary">Begin Session</a>
                            </div>
                            <!-- Item -->
                            <div class="d-flex align-items-center justify-content-between mb-3 p-2 rounded bg-light">
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/100x60" class="rounded me-3" alt="">
                                    <h6 class="mb-0">Four Magical Steps</h6>
                                </div>
                                <a href="#" class="btn btn-sm btn-soft-primary">Begin Session</a>
                            </div>
                            <!-- Item -->
                            <div class="d-flex align-items-center justify-content-between mb-0 p-2 rounded bg-light">
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/100x60?text=Figma" class="rounded me-3" alt="">
                                    <h6 class="mb-0">How To Enroll In IDIGITALPRENEUR</h6>
                                </div>
                                <a href="#" class="btn btn-sm btn-soft-primary">Begin Session</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- container-fluid -->
    </div><!-- page-content -->
</div><!-- page-wrapper -->


<script>
document.addEventListener("DOMContentLoaded", function () {
    const tabs = document.querySelectorAll("#training-days .nav-link");
    const videoSection = document.getElementById("video-section");

    tabs.forEach(tab => {
        tab.addEventListener("click", function (e) {
            e.preventDefault();

            // highlight active tab
            tabs.forEach(t => t.classList.remove("active", "text-primary"));
            this.classList.add("active", "text-primary");

            const day = this.getAttribute("data-day");

            // fetch video data via AJAX
            fetch(`/get-training-day/${day}`)
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        videoSection.innerHTML = `
                            <video class="w-100 rounded" height="400" controls poster="${data.poster}">
                                <source src="${data.video}" type="video/mp4">
                                Your browser does not support HTML video.
                            </video>
                        `;
                    } else {
                        videoSection.innerHTML = `<p class="text-danger py-5">${data.message}</p>`;
                    }
                })
                .catch(err => {
                    videoSection.innerHTML = `<p class="text-danger py-5">Error loading video</p>`;
                    console.error(err);
                });
        });
    });
});
</script>


@endsection