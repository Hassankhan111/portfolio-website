<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

<body>

    <div class="portfolio-wrapper">

        <div class="portfolio-card">

            <!-- Navbar Start -->
            <nav class="navbar navbar-expand-lg">

                <div class="container-fluid">

                    <!-- Logo -->
                    <a class="navbar-brand infor" href="#">
                        <h1 class="brand-name">ImranTech</h1>
                    </a>

                    <!-- Mobile Toggle -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">

                        <span class="navbar-toggler-icon"></span>

                    </button>

                    <div class="collapse navbar-collapse" id="navbarMenu">

                        <ul class="navbar-nav mx-auto">

                            <li class="nav-item">
                                <a class="nav-link active" href="/">HOME</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/about">ABOUT</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/services">SERVICES</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/projects">PROJECTS</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/skill">SKILLS</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/contect">CONTACT</a>
                            </li>

                        </ul>

                        <button id="theme-toggle" class="theme-toggle" aria-label="Toggle dark mode">
                            🌙
                        </button>

                    </div>

                </div>

            </nav>
            <!-- Navbar End -->'

            <!-- javascript for dark mode -->
            <script src="{{ asset('assets/js/main.js') }}"></script>