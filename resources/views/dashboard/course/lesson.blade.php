<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <title>Course Player | Mifty</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="{{ asset('assets/css/affiliate/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/cards/webinar.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/affiliate/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/affiliate/app.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Plyr CSS -->
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />

    <style>
        .lesson-item.active { background: #0d6efd1a; border-left: 4px solid #0d6efd; cursor:pointer; }
        .lesson-item.completed h6::after { content: "✔"; color: #28a745; margin-left: 8px; }
        .plyr__controls { background: rgba(0,0,0,0.6); }
        .card { border-radius: 12px; }
    </style>
</head>
<body class="dark">

<div class="page-wrapper">
    <div class="page-content" style="margin-left: 0 !important;">
        <div class="container-fluid mt-4">
            <div class="row">
                <!-- Main Video Player -->
                <div class="col-lg-8 mb-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 id="lesson-title" class="card-title mb-0">{{ $lessons[0]->title ?? 'Course Player' }}</h4>
                            <div class="progress w-50">
                                <div id="course-progress" class="progress-bar" role="progressbar" style="width:0%">0%</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Plyr Video -->
                            <video id="course-player" playsinline></video>
                            <p id="lesson-description" class="mt-3 text-muted">{{ $lessons[0]->description ?? '' }}</p>
                        </div>
                    </div>
                </div>

                <!-- Playlist -->
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Course Playlist</h5>
                        </div>
                        <div class="card-body" style="max-height:600px; overflow-y:auto;">
                            @foreach($lessons as $lesson)
                                <div class="lesson-item p-2 mb-2 rounded {{ $loop->first ? 'active' : '' }}" 
                                    data-id="{{ $lesson->id }}" 
                                    data-title="{{ $lesson->title }}" 
                                    data-description="{{ $lesson->description }}" 
                                    data-video="{{ $lesson->video_url }}">
                                    <h6 class="mb-1">Lesson {{ $lesson->lesson_order }}: {{ $lesson->title }}</h6>
                                    <small class="text-muted">{{ $lesson->duration ?? '' }}</small>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer text-center text-sm-start d-print-none">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-0 rounded-bottom-0">
                            <div class="card-body">
                                <p class="text-muted mb-0">
                                    © <script>document.write(new Date().getFullYear())</script> 2025 Mifty
                                    <span class="text-muted d-none d-sm-inline-block float-end">
                                        Design with <i class="iconoir-heart-solid text-danger align-middle"></i> by Mannatthemes
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="https://cdn.plyr.io/3.7.8/plyr.polyfilled.js"></script>

<script>
    const player = new Plyr('#course-player', {
        controls: ['play-large','play','progress','current-time','duration','mute','volume','captions','settings','fullscreen'],
        settings: ['quality','speed'],
        speed: { selected:1, options:[0.5,1,1.5,2] }
    });

    const titleEl = document.getElementById('lesson-title');
    const descEl = document.getElementById('lesson-description');
    const progress = document.getElementById('course-progress');
    const lessons = document.querySelectorAll('.lesson-item');
    const courseId = {{ $course->id ?? 1 }};
    let completed = JSON.parse(localStorage.getItem('course_'+courseId+'_completed')) || [];

    function updateProgress() {
        let percent = Math.round((completed.length / lessons.length) * 100);
        progress.style.width = percent+"%";
        progress.innerText = percent+"%";
    }

    function loadLesson(item){
        lessons.forEach(l => l.classList.remove('active'));
        item.classList.add('active');
        player.source = {
            type: 'video',
            title: item.dataset.title,
            sources: [{ src: item.dataset.video, type: 'video/mp4' }]
        };
        titleEl.innerText = item.dataset.title;
        descEl.innerText = item.dataset.description;
        player.play();
    }

    lessons.forEach(item => {
        if(completed.includes(parseInt(item.dataset.id))){
            item.classList.add('completed');
        }
        item.addEventListener('click', () => {
            loadLesson(item);
        });
    });

    player.on('ended', event => {
        const active = document.querySelector('.lesson-item.active');
        if(active){
            completed.push(parseInt(active.dataset.id));
            completed = [...new Set(completed)];
            localStorage.setItem('course_'+courseId+'_completed', JSON.stringify(completed));
            active.classList.add('completed');
            updateProgress();
        }
    });

    // Load first lesson on page load
    const firstLesson = document.querySelector('.lesson-item.active');
    if(firstLesson) loadLesson(firstLesson);

    updateProgress();
</script>

</body>
</html>
