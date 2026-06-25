<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guagua National Colleges</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/index-style.css" rel="stylesheet">
</head>
<body>

    <!-- ============================ NAVBAR ============================ -->
    <nav class="navbar gnc-navbar sticky-top navbar-expand-lg shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2 me-3" href="#">
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
                    <li class="nav-item"><a class="nav-link" href="#">News &amp; Events</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>

                    <li class="nav-item d-flex align-items-center">
                        <button id="search-toggle" class="btn-search" type="button" aria-label="Search">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85zm-5.242 1.014a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11z"/>
                            </svg>
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.029 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664h10z"/>
                            </svg>
                            Student Portal
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ============================ HERO SECTION ============================ -->
    <section class="landing-page" style="background: url('assets/images/school image.png') no-repeat center center; background-size: cover;">
        <div class="container">
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

        <!-- Carousel indicator dots -->
        <div class="hero-dots">
            <span class="active"></span>
            <span></span>
            <span></span>
        </div>
    </section>

    <!-- ============================ PILLARS STRIP — overlaps hero ============================ -->
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

        const dots = document.querySelectorAll('.hero-dots span');
        let current = 0;
        setInterval(function () {
            dots[current].classList.remove('active');
            current = (current + 1) % dots.length;
            dots[current].classList.add('active');
        }, 3500);
    });
    </script>
</body>
</html>