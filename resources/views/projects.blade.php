@extends('layout.app')

@section('title','projects')

@section('main')

<!-- #projects section-->
<section class="projects-section" id="project">
    <div class="container-fluid">

        <h2 class="section-title">Projects</h2>

        <div class="row">

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card project-card">

                    <div class="project-image">
                        <img src="{{ asset('assets/images/nexuslogin.jpg') }}" class="card-img-top" alt="Project 1">
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Nexus platform</h5>

                        <p class="card-text">
                            A nexus platform where investors and interprenure colobration with each other
                            built with php Laravel, MySQL, Bootstrap, AJAX and node js socket.io for real
                            time chat and video conference
                        </p>

                        <a href="#" class="btn project-btn">
                            View Project
                        </a>
                    </div>

                </div>
            </div>


            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card project-card">

                    <div class="project-image">
                        <img src="{{ asset('assets/images/project2.jpg') }}" class="card-img-top" alt="Project 2">
                    </div>

                    <div class="card-body">

                        <h5 class="card-title">
                            Laravel E-Commerce Platform
                        </h5>

                        <p class="card-text">

                            A full-stack eCommerce application built with Laravel,
                            MySQL, Bootstrap, AJAX and authentication.
                        </p>

                        <a href="https://github.com/Hassankhan111" target="_blank" class="btn project-btn">
                            View Project
                        </a>

                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card project-card">

                    <div class="project-image">
                        <img src="{{ asset('assets/images/chat.pg.jpg') }}" class="card-img-top" alt="Project 2">
                    </div>

                    <div class="card-body">

                        <h5 class="card-title">
                            Real-Time Chat Application
                        </h5>

                        <p class="card-text">
                            WhatsApp-like chat application using Node.js,
                            Express.js, Socket.io, MySQL and EJS.
                        </p>

                        <a href="https://github.com/Hassankhan111" target="_blank" class="btn project-btn">
                            View Project
                        </a>

                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card project-card">

                    <div class="project-image">
                        <img src="{{ asset('assets/images/chatbot.png.png') }}" class="card-img-top" alt="Project 4">
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Chatbot Application</h5>

                        <p class="card-text">
                            An intelligent chatbot application built with PHP, Laravel, and natural language
                            processing
                            for automated customer support and engagement
                        </p>

                        <a href="https://github.com/Hassankhan111" class="btn project-btn">
                            View Project
                        </a>
                    </div>

                </div>
            </div>


            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card project-card">

                    <div class="project-image">
                        <img src="{{ asset('assets/images/nexus dashboard.jpg') }}" class="card-img-top"
                            alt="Project 2">
                    </div>

                    <div class="card-body">

                        <h5 class="card-title">
                            Nexus Dashboard
                        </h5>

                        <p class="card-text">

                            A responsive dashboard for role-based access of Nexus platform built with
                            Laravel,
                            MySQL, Bootstrap, javascript and AJAX for real-time data visualization and
                            analytics.
                        </p>

                        <a href="https://github.com/Hassankhan111" target="_blank" class="btn project-btn">
                            View Project
                        </a>

                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card project-card">

                    <div class="project-image">
                        <img src="{{ asset('assets/images/portfolio.jpg.webp') }}" class="card-img-top" alt="Project 2">
                    </div>

                    <div class="card-body">

                        <h5 class="card-title">
                            Portfolio Website
                        </h5>

                        <p class="card-text">
                            A responsive portfolio website built with HTML, CSS, JavaScript,
                            and Bootstrap.
                        </p>
                        <a href="https://github.com/Hassankhan111" target="_blank" class="btn project-btn">
                            View Project
                        </a>

                    </div>

                </div>
            </div>


        </div>

    </div>
</section>


@endsection