@extends('layout.app')

@section('title','about')

@section('main')
<section class="about-section">
    <div class="container">

        <div class="row">


            <div class="col-md-8 mb-4">
                <h2 class="about">Mohammad Imran</h2>
                <p class="about-text">

                    I am a dedicated and passionate web developer with a strong focus on creating dynamic and
                    user-friendly websites. With expertise in HTML, CSS, JavaScript, and PHP, I enjoy bringing ideas
                    to life on the web. My journey in web development has been driven by a commitment to writing
                    clean,
                    efficient code and delivering high-quality solutions to clients. I am always eager to take on
                    new
                    challenges and collaborate with like-minded individuals to create innovative web experiences.
                </p>
            </div>

            <div class="col-md-4 mb-4">
                <img class="about-image" src="{{ asset('assets/images/myimg.jpg') }}" style="width:400px; height:400px"
                    ; alt="About Me" class="img-fluid rounded">
            </div>

        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="about-two">
            <div class="row align-items-center">

                <!-- Left Content -->
                <div class="col-md-12 mb-4 mb-md-0">

                    <h2 class="about">About Me</h2>

                    <p class="about-text">
                        Hello! I'm Imran, a passionate web developer with a love for creating
                        dynamic and user-friendly
                        websites. With a strong foundation in HTML, CSS, JavaScript, and PHP, I enjoy bringing ideas to
                        life
                        on the web.
                        My journey in web development started a few years ago, and since then, I've been dedicated to
                        honing
                        my skills and staying up-to-date with the latest technologies. I believe in writing clean,
                        efficient
                        code and delivering high-quality solutions to clients.
                        When I'm not coding, you can find me exploring new technologies, contributing to open-source
                        projects, or enjoying a good book. I'm always eager to take on new challenges and collaborate
                        with
                        like-minded individuals.
                    </p>

                    <div class="whychoseme mt-4">
                        <h3 class="why">Why Choose Me?</h3>

                        <ul class="why-list mt-3">
                            <li>✅ Expert in Laravel for robust backend development.</li>
                            <li>✅ Proficient in Node.js and React for modern, high-performance web applications.</li>
                            <li>✅ Experienced in PHP, Laravel, JavaScript, HTML, CSS, and Bootstrap.</li>
                            <li>✅ Skilled in JavaScript, SQL, and API integration.</li>
                            <li>✅ Strong problem-solving skills for bug fixing and performance optimization.</li>
                            <li>✅ Committed to delivering high-quality work on time with clear communication.</li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<section class="skills-section">
    <div class="container">
        <div class="mt-5">

            <div class="text-center mb-5">
                <h2 class="about">Experience</h2>
                <p class="about-text text-center">
                    My professional journey in web development, software engineering, and IT.
                </p>
            </div>

            <div class="row g-4">

                <div class="col-lg-6">
                    <div class="skill-item">
                        <h3>Junior Full Stack Web Developer – Pa Byta lahore pakistan</h3>
                        <span class="experience-date">jan 2023 – present 2 yrs 3 mos </span>

                        <ul class="experience-list">
                            <li>Front-end development using HTML, Bootstrap, Vue.js & jQuery.</li>
                            <li>Backend development with Laravel, AJAX & MySQL.</li>
                            <li>UI/UX design and prototyping in Figma.</li>
                            <li>Git & GitHub collaboration and project reporting.</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="skill-item">
                        <h3>Web Developer & Requirements Analyst – abasyn software house</h3>
                        <span class="experience-date">Oct 2020 – Apr 2021</span>

                        <ul class="experience-list">
                            <li> website development and maintenance.</li>
                            <li>Api and payment gateway integration.</li>
                            <li>Requirements analysis and documentation.</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="skill-item">
                        <h3>AI Chatbot integration Developer –paragon full time</h3>
                        <span class="experience-date">May 2023 – Sep 2024</span>

                        <ul class="experience-list">
                            <li>chatbot development and integration.</li>
                            <li>email marketing and automation.</li>
                            <li>AI model training and deployment.</li>
                            <li>Project management and reporting.</li>
                            <li>open Ai integration.</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="skill-item">
                        <h3>freelance web development – Self-employed</h3>
                        <span class="experience-date">May 2022 – 2026 present</span>

                        <ul class="experience-list">
                            <li>Website development and maintenance.</li>
                            <li>Database development and management.</li>
                            <li>Stripe, DonorBox & PayPal integration.</li>
                            <li>SEO implementation and analytics.</li>
                            <li>Project monitoring and reporting.</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="skill-item">
                        <h3>data science & AI –Riphah International University lahore pakistan</h3>
                        <span class="experience-date">Jun 2022 – May 2024</span>

                        <ul class="experience-list">
                            <li>covid-19 dataset analysis</li>
                            <li>supervised learning and unsupervised learning</li>
                            <li>machine learning model development</li>
                            <li>data visualization and reporting</li>
                            <li>AI model training and deployment</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="skill-item">
                        <h3>MERN stack developer – ARCH technology Remote</h3>
                        <span class="experience-date">Mar 2019 – May 2019 </span>

                        <ul class="experience-list">
                            <li>web development and maintenance</li>
                            <li>web design</li>
                            <li>dashboard development</li>
                            <li>ecommerce website development</li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
@endsection