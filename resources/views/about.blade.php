@include('partails.header')

<section class="about-section">
    <div class="container">

        <div class="row">


            <div class="col-md-8 mb-4">
                <h2 class="about">Mohammad Imran</h2>
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
            </div>

            <div class="col-md-4 mb-4">
                <img class="about-image" src="{{ asset('assets/images/dsc-0247.jpg') }}" alt="About Me"
                    class="img-fluid rounded">
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
                        I am a dedicated and passionate web developer with a strong focus on creating dynamic and
                        user-friendly websites. With expertise in HTML, CSS, JavaScript, and PHP, I enjoy bringing ideas
                        to life on the web. My journey in web development has been driven by a commitment to writing
                        clean,
                        efficient code and delivering high-quality solutions to clients. I am always eager to take on
                        new
                        challenges and collaborate with like-minded individuals to create innovative web experiences.
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
                        <h3>Full Stack Web Developer – Baheer Group (BG)</h3>
                        <span class="experience-date">Apr 2023 – Present</span>

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
                        <h3>Web Developer & SEO Analyst – Qader Zaher Group (QZG)</h3>
                        <span class="experience-date">Oct 2022 – Apr 2023</span>

                        <ul class="experience-list">
                            <li>WordPress website development and maintenance.</li>
                            <li>Stripe & PayPal payment gateway integration.</li>
                            <li>SEO optimization and analytics implementation.</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="skill-item">
                        <h3>Web Developer & Social Media Manager – AAHO</h3>
                        <span class="experience-date">Mar 2022 – Sep 2022</span>

                        <ul class="experience-list">
                            <li>WordPress, HTML, CSS & JavaScript development.</li>
                            <li>Social media management and marketing.</li>
                            <li>Payment gateway integration.</li>
                            <li>Project management and reporting.</li>
                            <li>Website maintenance and updates.</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="skill-item">
                        <h3>Full Stack Web Developer & SEO Analyst – Qamar Charity Foundation</h3>
                        <span class="experience-date">May 2020 – Jan 2022</span>

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
                        <h3>IT Officer & Web Developer – Ghazi Amanullah Khan Institute of Health Sciences</h3>
                        <span class="experience-date">Jun 2017 – May 2020</span>

                        <ul class="experience-list">
                            <li>Computer lab management and maintenance.</li>
                            <li>Web-based database administration.</li>
                            <li>LAN setup and maintenance.</li>
                            <li>Website maintenance and updates.</li>
                            <li>Student documentation and diploma management.</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="skill-item">
                        <h3>Computer & English Teacher – Al-Quran Private High School</h3>
                        <span class="experience-date">Mar 2015 – May 2017</span>

                        <ul class="experience-list">
                            <li>Computer lab instruction and practical training.</li>
                            <li>English language teaching.</li>
                            <li>Student motivation and career guidance.</li>
                            <li>Teacher computer skills training.</li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

@include('partails.footer')