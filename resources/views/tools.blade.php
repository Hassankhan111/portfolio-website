@extends('layout.app')

@section('title','skill')

@section('main')
<!-- #language and tools -->
<section class="language-tools-section py-3" id="language-tools">
    <div class="container-fluid">

        <div class="language-tools-card">

            <h2 class="section-title">Languages & Tools</h2>

            <div class="tools-icons">

                <div class="tool-item">
                    <i class="fab fa-html5"></i>
                    <span>HTML5</span>
                </div>

                <div class="tool-item">
                    <i class="fab fa-css3-alt"></i>
                    <span>CSS3</span>
                </div>

                <div class="tool-item">
                    <i class="fab fa-js-square"></i>
                    <span>JavaScript</span>
                </div>

                <div class="tool-item">
                    <i class="fab fa-php"></i>
                    <span>PHP</span>
                </div>

                <div class="tool-item">
                    <i class="fab fa-laravel"></i>
                    <span>Laravel</span>
                </div>

                <div class="tool-item">
                    <i class="fab fa-react"></i>
                    <span>React</span>
                </div>

                <div class="tool-item">
                    <i class="fab fa-node-js"></i>
                    <span>Node.js</span>
                </div>

                <div class="tool-item">
                    <i class="fab fa-bootstrap"></i>
                    <span>Bootstrap</span>
                </div>

                <div class="tool-item">
                    <i class="fab fa-git-alt"></i>
                    <span>Git</span>
                </div>

                <div class="tool-item">
                    <i class="fab fa-github"></i>
                    <span>GitHub</span>
                </div>

                <div class="tool-item">
                    <i class="fab fa-docker"></i>
                    <span>Docker</span>
                </div>

                <!-- Express.js -->
                <div class="tool-item">
                    <i class="fab fa-node-js"></i>
                    <span>Express.js</span>
                </div>

                <!-- AJAX -->
                <div class="tool-item">
                    <i class="fas fa-arrows-rotate"></i>
                    <span>AJAX</span>
                </div>

                <!-- SQL -->
                <div class="tool-item">
                    <i class="fas fa-database"></i>
                    <span>SQL</span>
                </div>

                <!-- MongoDB -->
                <div class="tool-item">
                    <i class="fas fa-leaf"></i>
                    <span>MongoDB</span>
                </div>

            </div>

        </div>

    </div>
</section>
@include('services')

@endsection