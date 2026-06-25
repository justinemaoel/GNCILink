<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guagua National Colleges</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/index-style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>

    <!-- ============================ NAVBAR ============================ -->
    <nav class="navbar gnc-navbar sticky-top navbar-expand-lg shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2 me-3">
                <img src="assets/images/GNC LOGO 1.svg" alt="GNC Logo" width="46" height="46">
                <div class="brand-text d-none d-md-block">
                    <span class="brand-name d-block">Guagua National Colleges, Inc.</span>
                    <span class="brand-tagline d-block">Fides, Scientia et. Patria</span>
                </div>
            </a>

            <button class="navbar-toggler border-0 ms-auto me-2" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item active">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Academics</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Admissions</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Student Life</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">News & Events</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>

                    <li class="nav-item d-flex align-items-center">
                        <button id="search-toggle" class="btn-search" type="button" aria-label="Search">
                            <i class="bi bi-search"></i>
                        </button>
                    </li>
                    <li class="nav-item" id="search-box-item" style="display:none;">
                        <form class="d-flex" action="#" onsubmit="return false;">
                            <input id="search-input" class="form-control form-control-sm"
                                type="search" placeholder="Search…" aria-label="Search"
                                style="min-width:160px;">
                        </form>
                    </li>

                    <li class="nav-item ms-2">
                        <a class="btn-portal" href="auth/login.php" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                            </svg>
                            Student Portal
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ============================ HERO SLIDESHOW ============================ -->
    <div class="hero-slideshow">
        <div class="hero-slide slide-1 active" data-slide="0">
            <div class="slide-bg" style="background-image: url('assets/images/school image.png');"></div>
            <div class="slide-overlay"></div>
            <div class="container h-100">
                <div class="hero-content">
                    <h1 class="hero-title-gold mb-0">EMPOWERING MINDS.</h1>
                    <h1 class="hero-title-white">INSPIRING FUTURES.</h1>
                    <p class="hero-desc">
                        A Legacy of academic excellence, character formation,<br>
                        and service to the community since 1918.
                    </p>
                    <div class="hero-ctas">
                        <a href="auth/login.php" target="_blank" class="btn-enroll">
                            ENROLL NOW
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                            </svg>
                        </a>
                        <a href="#about" class="btn-explore">EXPLORE GNC</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- ── SLIDE 2 — Video slide ── -->
        <div class="hero-slide slide-2" data-slide="1">
            <div class="slide-video-wrap">
                <video
                    id="hero-video"
                    class="slide-video"
                    src="assets/video/school video.mp4"
                    muted
                    loop
                    playsinline
                    preload="none">
                </video>
            </div>
            <div class="slide-overlay"></div>
        </div>

        <!-- ── SLIDE 3 — Second image slide ── -->
        <div class="hero-slide slide-3" data-slide="2">
            <div class="slide-bg" style="background-image: url('assets/images/the-devs.png');"></div>
            <div class="slide-overlay"></div>
            <div class="container h-100">
                <div class="hero-content">
                    <h1 class="hero-title-gold mb-0">MEET THE</h1>
                    <h1 class="hero-title-white">DEVELOPERS.</h1>
                    <p class="hero-desc">
                        We are a dedicated group of student developers working together as part of our capstone project to design and develop our school’s official website. Our goal is to create a clean, user-friendly, and informative platform that effectively represents the school and serves the needs of students, teachers, parents, and visitors.
                    </p>
                </div>
            </div>
        </div>

        <!-- ── Navigation arrows ── -->
        <button class="slide-arrow slide-arrow-prev" id="slide-prev" aria-label="Previous slide">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
            </svg>
        </button>
        <button class="slide-arrow slide-arrow-next" id="slide-next" aria-label="Next slide">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
            </svg>
        </button>

        <!-- ── Dot indicators ── -->
        <div class="hero-dots">
            <span class="active" data-target="0"></span>
            <span data-target="1"></span>
            <span data-target="2"></span>
        </div>
    </div>

    <!-- ============================ PILLARS STRIP ============================ -->
    <div class="gnc-pillars">
        <div class="container">
            <div class="pillar-card">
                <div class="pillar-wrap">

                    <!-- FIDES -->
                    <div class="pillar-item">
                        <div class="pillar-icon-wrap fides-bg">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L12 6" stroke="#C9A84C" stroke-width="2" stroke-linecap="round"/>
                                <path d="M10 4H14" stroke="#C9A84C" stroke-width="2" stroke-linecap="round"/>
                                <path d="M4 22V12L12 6L20 12V22" stroke="#C9A84C" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9 22V17C9 15.9 9.9 15 11 15H13C14.1 15 15 15.9 15 17V22" stroke="#C9A84C" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div>
                            <p class="pillar-title fides-color">FIDES</p>
                            <p class="pillar-desc">Faith in God and One's Self.</p>
                        </div>
                    </div>

                    <!-- SCIENTIA -->
                    <div class="pillar-item">
                        <div class="pillar-icon-wrap scientia-bg">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 6C2 6 5 5 7 5C9 5 11 6 12 7C13 6 15 5 17 5C19 5 22 6 22 6V19C22 19 19 18 17 18C15 18 13 19 12 20C11 19 9 18 7 18C5 18 2 19 2 19V6Z"
                                    stroke="#094024" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 7V20" stroke="#094024" stroke-width="1.8" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <div>
                            <p class="pillar-title scientia-color">SCIENTIA</p>
                            <p class="pillar-desc">Search for Truth and Knowledge.</p>
                        </div>
                    </div>

                    <!-- PATRIA -->
                    <div class="pillar-item">
                        <div class="pillar-icon-wrap patria-bg">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 19L19 5" stroke="#b03030" stroke-width="1.8" stroke-linecap="round"/>
                                <path d="M19 19L5 5" stroke="#b03030" stroke-width="1.8" stroke-linecap="round"/>
                                <circle cx="12" cy="12" r="3" stroke="#b03030" stroke-width="1.8"/>
                            </svg>
                        </div>
                        <div>
                            <p class="pillar-title patria-color">PATRIA</p>
                            <p class="pillar-desc">Love for Country.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {

        /* ── Search toggle ── */
        const toggle        = document.getElementById('search-toggle');
        const searchBoxItem = document.getElementById('search-box-item');
        const searchInput   = document.getElementById('search-input');

        if (toggle && searchBoxItem && searchInput) {
            toggle.addEventListener('click', function () {
                const isVisible = searchBoxItem.style.display === 'flex';
                searchBoxItem.style.display = isVisible ? 'none' : 'flex';
                if (!isVisible) searchInput.focus();
            });
            document.addEventListener('click', function (e) {
                if (!toggle.contains(e.target) && !searchBoxItem.contains(e.target)) {
                    searchBoxItem.style.display = 'none';
                }
            });
        }

        /* ── Slideshow ── */
        const slides    = document.querySelectorAll('.hero-slide');
        const dots      = document.querySelectorAll('.hero-dots span');
        const prevBtn   = document.getElementById('slide-prev');
        const nextBtn   = document.getElementById('slide-next');
        const heroVideo = document.getElementById('hero-video');

        let current   = 0;
        let autoTimer = null;
        const INTERVAL = 5000;  
        const TOTAL    = slides.length;

        function goTo(index, direction) {
            const prev  = current;
            current     = (index + TOTAL) % TOTAL;

            const leaving  = slides[prev];
            const entering = slides[current];

            if (prev === 1 && heroVideo) heroVideo.pause();

            leaving.classList.add(direction === 'prev' ? 'exit-right' : 'exit-left');
            leaving.classList.remove('active');

            entering.classList.add(direction === 'prev' ? 'enter-from-left' : 'enter-from-right');

            entering.getBoundingClientRect();

            entering.classList.add('active');
            entering.classList.remove('enter-from-left', 'enter-from-right');

            leaving.addEventListener('transitionend', function cleanup() {
                leaving.classList.remove('exit-left', 'exit-right');
                leaving.removeEventListener('transitionend', cleanup);
            });

            dots.forEach(d => d.classList.remove('active'));
            dots[current].classList.add('active');

            if (current === 1 && heroVideo) {
                heroVideo.currentTime = 0;
                heroVideo.play().catch(() => {});
            }

            const content = entering.querySelector('.hero-content');
            if (content) {
                content.classList.remove('content-in');
                void content.offsetWidth;
                content.classList.add('content-in');
            }
        }

        function startAuto() {
            clearInterval(autoTimer);
            autoTimer = setInterval(() => goTo(current + 1, 'next'), INTERVAL);
        }

        function resetAuto() {
            startAuto();
        }

        prevBtn.addEventListener('click', function () {
            goTo(current - 1, 'prev');
            resetAuto();
        });
        nextBtn.addEventListener('click', function () {
            goTo(current + 1, 'next');
            resetAuto();
        });

        dots.forEach(function (dot) {
            dot.addEventListener('click', function () {
                const target = parseInt(dot.dataset.target, 10);
                if (target !== current) {
                    goTo(target, target > current ? 'next' : 'prev');
                    resetAuto();
                }
            });
        });

        let touchStartX = 0;
        const slideshow = document.querySelector('.hero-slideshow');
        slideshow.addEventListener('touchstart', e => { touchStartX = e.touches[0].clientX; }, { passive: true });
        slideshow.addEventListener('touchend', e => {
            const dx = e.changedTouches[0].clientX - touchStartX;
            if (Math.abs(dx) > 50) {
                dx < 0 ? goTo(current + 1, 'next') : goTo(current - 1, 'prev');
                resetAuto();
            }
        });

        slides[0].querySelector('.hero-content').classList.add('content-in');
        startAuto();
    });
    </script>
</body>
</html>