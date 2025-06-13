@extends('layouts.master')

@section('title', 'ChocoLux - Home')

@section('hero')
<!-- slider section -->
<section class="slider_section">
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="detail_box">
                                <h1>
                                    Chocolate <br>
                                    <span>Yummy</span>
                                </h1>
                                <a href="{{ route('about') }}">
                                    <span>Read More</span>
                                    <img src="{{ asset('images/white-arrow.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 ml-auto">
                            <div class="img-box">
                                <img src="{{ asset('images/slider-img.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="detail_box">
                                <h1>
                                    Chocolate <br>
                                    <span>Yummy</span>
                                </h1>
                                <a href="{{ route('about') }}">
                                    <span>Read More</span>
                                    <img src="{{ asset('images/white-arrow.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 ml-auto">
                            <div class="img-box">
                                <img src="{{ asset('images/slider-img.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel_btn-box">
            <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
@endsection

@section('content')
<!-- about section -->
<section class="about_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="detail-box">
                    <div class="heading_container">
                        <h2>About Our Company</h2>
                    </div>
                    <p>
                        Choco Lux adalah perusahaan yang didirikan dengan misi untuk menyajikan pengalaman terbaik dalam menikmati produk cokelat premium. Kami percaya bahwa cokelat bukan hanya sekadar makanan, tetapi juga sebuah seni yang mampu menyentuh emosi dan menciptakan momen berharga dalam hidup. Dengan komitmen untuk menghadirkan kualitas terbaik, setiap produk yang kami luncurkan dirancang untuk memanjakan lidah dan memberikan kebahagiaan bagi setiap penikmatnya.
                      </p>
                    <a href="{{ route('about') }}">
                        <span>Read More</span>
                        <img src="{{ asset('images/color-arrow.png') }}" alt="">
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-box">
                    <img src="{{ asset('images/about-img.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- kategori section -->
<section class="chocolate_section">
    <div class="container">
        <div class="heading_container">
            <h2>Our Chocolate Categories</h2>
        </div>
    </div>

    <div class="container">
        <div class="chocolate_container">
            @foreach($categories as $category)
                <div class="box">
                    <div class="img-box">
                        <img src="{{ asset('images/' . $category->image) }}" alt="{{ $category->nama }}">
                    </div>
                    <div class="detail-box">
                        <a href="{{ route('products.category', $category->slug) }}">
                            <h6>{{ $category->nama }}</h6>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- products section -->
<section class="chocolate_section">
    <div class="container">
        <div class="heading_container">
            <h2>Our Chocolate Products</h2>
        </div>
        <div class="chocolate_container">
            @foreach($products as $product)
            <div class="box">
                <div class="img-box">
                    <img src="{{ asset("images/{$product->foto}") }}" alt="{{ $product->nama }}">
                </div>
                <div class="detail-box">
                    <h6>{{ $product->nama }}</h6>
                    <h5>Rp. {{ number_format($product->harga, 0, ',', '.') }}</h5>
                    <a href="{{ route('products.show', $product->id) }}" class="btn-buy">BUY NOW</a>
                </div>
            </div>
        @endforeach
        </div>
        <div class="see-more text-center mt-4 mb-5">
            <a href="{{ route('products.index') }}" class="btn btn-primary" style="background-color: #5d3a1d;">See More</a>
        </div>
    </div>
</section>

<!-- testimonial section -->
<section class="client_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 ml-auto">
                <div class="img-box sub_img-box">
                    <img src="{{ asset('images/client-chocolate.png') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6 px-0">
                <div class="client_container">
                    <div class="heading_container">
                        <h2>Testimonial</h2>
                    </div>
                    <div id="customCarousel2" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($testimonials as $index => $testimonial)
                                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                    <div class="box">
                                        <div class="img-box">
                                            <img src="{{ asset('images/client-img.jpg') }}" alt="">
                                        </div>
                                        <div class="detail-box">
                                            <h4>{{ $testimonial->name }}</h4>
                                            <p>{{ $testimonial->message }}</p>
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="carousel_btn-box">
                            <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- contact section -->
<section class="contact_section layout_padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 col-lg-4 offset-md-1 offset-lg-2">
                <div class="form_container">
                    <div class="heading_container">
                        <h2>Contact Us</h2>
                    </div>
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div>
                            <input type="text" name="name" placeholder="Full Name" required />
                        </div>
                        <div>
                            <input type="text" name="phone" placeholder="Phone number" required />
                        </div>
                        <div>
                            <input type="email" name="email" placeholder="Email" required />
                        </div>
                        <div>
                            <input type="text" class="message-box" name="message" placeholder="Message" required />
                        </div>
                        <div class="d-flex">
                            <button type="submit">SEND NOW</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 px-0">
                <div class="map_container">
                    <div class="map">
                        <div id="googleMap"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google.maps_api_key') }}&callback=myMap"></script>
@endsection
