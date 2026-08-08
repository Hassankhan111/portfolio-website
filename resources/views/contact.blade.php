@include('partails.header')

<section class="contact-section" id="contact">

    <div class="container-fluid">

        <h2 class="section-title">Connect With Me</h2>

        <div class="row align-items-center">

            <!-- Contact Info -->
            <div class="col-lg-5 mb-5">

                <div class="contact-info">

                    <h3>Let's Build Something Great!</h3>

                    <p>
                        Have a project idea or looking for a Laravel & Full-Stack
                        Developer? Feel free to reach out. I'd love to discuss your
                        project and help bring your ideas to life.
                    </p>

                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h6>Email</h6>
                            <span>armanimran240@gmail.com</span>
                        </div>
                    </div>

                    <div class="contact-item">
                        <i class="fab fa-whatsapp"></i>
                        <div>
                            <h6>WhatsApp</h6>
                            <span>+92 304 597 50 20</span>
                        </div>
                    </div>

                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <h6>Phone</h6>
                            <span>+93 730 140 646</span>
                        </div>
                    </div>

                    <div class="contact-item">
                        <i class="fas fa-location-dot"></i>
                        <div>
                            <h6>Location</h6>
                            <span>jalalabad, Afghanistan</span>
                        </div>
                    </div>

                    <div class="social-links">

                        <a href="https://github.com/Hassankhan111" target="_blank"><i class="fab fa-github"></i></a>

                        <a href="https://linkedin.com/in/hassankhan111" target="_blank"><i
                                class="fab fa-linkedin-in"></i></a>

                        <a href="https://facebook.com/hassankhan111" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>

                        <a href="https://instagram.com/hassankhan111" target="_blank"><i
                                class="fab fa-instagram"></i></a>

                        <a href="https://twitter.com/hassankhan111" target="_blank"><i class="fab fa-x-twitter"></i></a>

                    </div>

                </div>

            </div>

            <!-- Contact Form -->
            <div class="col-lg-7">

                <div class="contact-form">
                    <!-- #region -->
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif

                    <form accept="" action="{{ route('contact-save') }}" method="POST">
                        @csrf
                        <div class="row">

                            <div class="col-md-6 mb-4">
                                <input type="text" class="form-control" name="name" placeholder="Your Name">
                            </div>

                            <div class="col-md-6 mb-4">
                                <input type="number" class="form-control" name="phone" placeholder="Phone Number">
                            </div>

                            <div class="col-md-12 mb-4">
                                <input type="email" class="form-control" name="email" placeholder="Email Address">
                            </div>

                            <div class="col-12 mb-4">
                                <input type="text" class="form-control" name="subject" placeholder="Subject">
                            </div>

                            <div class="col-12 mb-4">
                                <textarea class="form-control" name="message" rows="6"
                                    placeholder="Write your message..."></textarea>
                            </div>

                            <div class="col-12">
                                <button class="btn contact-btn">
                                    Send Message
                                </button>
                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>

@include('partails.footer')