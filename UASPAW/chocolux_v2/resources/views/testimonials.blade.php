@extends('layouts.master')

@section('title', 'Testimonials - ChocoLux')

@section('content')
<!-- client section -->
<section class="client_section layout_padding">
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
                        <h2>Testimonials</h2>
                        <p>What our customers say about us</p>
                    </div>

                    <!-- Testimonials Carousel -->
                    <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @forelse($testimonials as $index => $testimonial)
                                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                    <div class="box">
                                        <div class="img-box">
                                            <img src="{{ asset('images/client-img.jpg') }}" alt="{{ $testimonial->name }}">
                                        </div>
                                        <div class="detail-box">
                                            <h4>{{ $testimonial->name }}</h4>
                                            <p>{{ $testimonial->message }}</p>
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="carousel-item active">
                                    <div class="box">
                                        <div class="detail-box">
                                            <p>No testimonials yet. Be the first to share your experience!</p>
                                        </div>
                                    </div>
                                </div>
                            @endforelse
                        </div>

                        <!-- Carousel Navigation -->
                        <div class="carousel_btn-box">
                            <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
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



@endsection
