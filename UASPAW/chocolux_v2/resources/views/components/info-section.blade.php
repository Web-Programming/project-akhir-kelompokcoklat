<section class="info_section layout_padding2">
    <div class="container">
        <div class="row info_form_social_row">
            <div class="col-md-8 col-lg-9">
                <div class="info_form">
                    <form action="" method="POST">
                        @csrf
                        <input type="email" name="email" placeholder="Enter your email" required>
                        <button type="submit">
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="social_box">
                    <a href="{{ config('app.social.facebook') }}">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="{{ config('app.social.twitter') }}">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="{{ config('app.social.linkedin') }}">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row info_main_row">
            <div class="col-md-6 col-lg-3">
                <div class="info_links">
                    <h4>Menu</h4>
                    <div class="info_links_menu">
                        <a href="{{ route('home') }}">Home</a>
                        <a href="{{ route('about') }}">About</a>
                        <a href="{{ route('products.index') }}">Chocolates</a>
                        <a href="{{ route('testimonials') }}">Testimonial</a>
                        <a href="{{ route('contact') }}">Contact us</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="info_insta">
                    <h4>Instagram</h4>
                    <div class="insta_box">
                        <div class="img-box">
                            <img src="{{ asset('images/insta-img.png') }}" alt="Instagram Post">
                        </div>
                        <p>Long established fact that a reader</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="info_detail">
                    <h4>Contact</h4>
                    <p class="mb-0">Tel: +01 23456789</p>
                    <p class="mb-0">Email: info@example.com</p>
                    <p class="mb-0">Address: 123 Main Street, Your City</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <h4>Open Time</h4>
                <div class="info_contact">
                    <p class="mb-0">Mon - Fri: 8:00 AM - 10:00 PM</p>
                    <p class="mb-0">Sat - Sun: 10:00 AM - 8:00 PM</p>
                </div>
            </div>
        </div>
    </div>
</section>
