       @extends('layout.app')

       @section('title','Home')

       @section('main')

       <!-- Hero Section -->
       <section class="hero-section" id="home">
           <div class="container-fluid h-100">

               <div class="row h-100">

                   <!-- Left Side -->
                   <div class="col-lg-5">

                       <div class="left-panel">

                           <div class="profile-image">

                               <img src="{{ asset('assets/images/logo.png') }}" alt="Profile">

                           </div>

                           <div class="bottom-cards">

                               <div class="info-box">
                                   <h2>Education</h2>
                                   <div class="card m-3 education-card">
                                       <div class=" card-body">
                                           <h5 class="card-title">Bachelor of Computer Science</h5>
                                           <h6 class="card-subtitle mb-2 text-muted">Comsats University Islamabad
                                           </h6>
                                           <p class="card-text">Graduated in 2020 </p>
                                       </div>
                                   </div>

                                   <div class="card m-3 education-card">
                                       <div class="card-body">
                                           <h5 class="card-title">12th Grade Certification</h5>
                                           <h6 class="card-subtitle mb-2 text-muted">charbagh safa High School
                                           </h6>
                                           <p class="card-text">Graduated in 2013 </p>
                                       </div>
                                   </div>

                               </div>

                           </div>

                       </div>

                   </div>

                   <!-- Right Side -->
                   <div class="col-lg-7">

                       <div class="right-panel">

                           <!-- Greeting -->
                           <span class="hero-tag">
                               👋 Hello There!
                           </span>

                           <!-- Name -->
                           <h1 class="hero-title">
                               I'm <span>Mohammad Imran</span>
                           </h1>

                           <!-- Profession -->
                           <h2 class="hero-subtitle">
                               FULL-STACK DEVELOPER
                           </h2>

                           <!-- Description -->
                           <p class="hero-text">
                               I am a passionate Full-Stack Developer with over 5 years of experience building
                               modern, scalable, and high-performance web applications. I turn your ideas into
                               powerful digital solutions by developing custom websites, web apps, and full-scale
                               platforms tailored to your needs. My skills include PHP, Laravel, JavaScript, React,
                               Node.js, Express.js, HTML5, CSS3, Bootstrap, and more. I focus on clean code,
                               responsive design, and user-friendly experiences. I have worked in eCommerce,
                               education, telecom, and healthcare. Let’s build something amazing together.
                           </p>

                           <!-- Buttons -->
                           <div class="hero-buttons">

                               <a href="#" class="btn btn-dark btn-lg">
                                   Hire Me
                               </a>

                               <a href="#" class="btn btn-outline-dark btn-lg">
                                   Download CV
                               </a>

                           </div>

                           <div class="stats-section">

                               <div class="stat-card">

                                   <h3>5+</h3>

                                   <p>Years Learning</p>

                               </div>

                               <div class="stat-card">

                                   <h3>50+</h3>

                                   <p>Projects</p>

                               </div>

                               <div class="stat-card">

                                   <h3>20+</h3>

                                   <p>Technologies</p>

                               </div>

                           </div>

                       </div>

                   </div>

               </div>

           </div>
       </section>

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

       <section class="services-section">

           <div class="container-fluid">

               <h2 class="section-title">My Services</h2>

               <div class="row g-4">

                   <!-- Service 1 -->
                   <div class="col-lg-4 col-md-6">
                       <div class="service-card">

                           <div class="service-icon">
                               <i class="fas fa-code"></i>
                           </div>

                           <h4>Laravel Development</h4>

                           <p>
                               Build secure, scalable, and high-performance web applications
                               using Laravel, PHP, MySQL, and REST APIs.
                           </p>

                       </div>
                   </div>

                   <!-- Service 2 -->
                   <div class="col-lg-4 col-md-6">
                       <div class="service-card">

                           <div class="service-icon">
                               <i class="fas fa-laptop-code"></i>
                           </div>

                           <h4>Full Stack Development</h4>

                           <p>
                               Complete web application development using Laravel,
                               Bootstrap, JavaScript, AJAX, and MySQL.
                           </p>

                       </div>
                   </div>

                   <!-- Service 3 -->
                   <div class="col-lg-4 col-md-6">
                       <div class="service-card">

                           <div class="service-icon">
                               <i class="fas fa-database"></i>
                           </div>

                           <h4>Database Design</h4>

                           <p>
                               Design optimized MySQL databases with relationships,
                               indexing, and efficient query performance.
                           </p>

                       </div>
                   </div>

                   <!-- Service 4 -->
                   <div class="col-lg-4 col-md-6">
                       <div class="service-card">

                           <div class="service-icon">
                               <i class="fas fa-mobile-alt"></i>
                           </div>

                           <h4>Responsive Design</h4>

                           <p>
                               Create mobile-friendly, responsive websites using
                               Bootstrap 5, HTML5, and modern CSS.
                           </p>

                       </div>
                   </div>

                   <!-- Service 5 -->
                   <div class="col-lg-4 col-md-6">
                       <div class="service-card">

                           <div class="service-icon">
                               <i class="fas fa-bolt"></i>
                           </div>

                           <h4>REST API Development</h4>

                           <p>
                               Develop secure RESTful APIs with authentication,
                               validation, and JSON responses.
                           </p>

                       </div>
                   </div>

                   <!-- Service 6 -->
                   <div class="col-lg-4 col-md-6">
                       <div class="service-card">

                           <div class="service-icon">
                               <i class="fas fa-headset"></i>
                           </div>

                           <h4>Maintenance & Support</h4>

                           <p>
                               Provide bug fixes, feature updates, optimization,
                               deployment, and ongoing technical support.
                           </p>

                       </div>
                   </div>

               </div>

           </div>

       </section>

       @endsection