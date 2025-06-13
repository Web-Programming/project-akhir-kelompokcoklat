@extends('layouts.master')

@section('title', 'ChocoLux - Products')

@section('styles')
<style>
    .chocolate_container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }
    .box {
        flex: 0 0 30%;
        margin-bottom: 20px;
        text-align: center;
    }
    .filter_category {
        margin-bottom: 20px;
        text-align: center;
    }
    .filter_category select {
        padding: 10px;
        border-radius: 5px;
        border: 2px solid #8B4513;
        background-color: #f4e1d2;
        font-size: 16px;
        color: #8B4513;
        width: 200px;
        transition: 0.3s ease;
    }
    .filter_category select:hover {
        background-color: #f2c29d;
        border-color: #d2691e;
    }
    .filter_category select:focus {
        outline: none;
        box-shadow: 0 0 10px rgba(139, 69, 19, 0.5);
    }
    .search-container {
        margin-bottom: 20px;
        text-align: center;
    }
    .search-input {
        padding: 10px;
        width: 300px;
        border-radius: 5px;
        border: 2px solid #8B4513;
        margin-right: 10px;
    }
    .search-btn {
        padding: 10px 20px;
        background-color: #8B4513;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .search-btn:hover {
        background-color: #d2691e;
    }
</style>
@endsection

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
<div class="chocolate_section" style="margin-top: 20px;">
    <div class="container">
        <div class="heading_container">
            <h2>Our Chocolate Products</h2>
        </div>

        <!-- Search Form -->
        <div class="search-container">
            <form action="{{ route('products.index') }}" method="GET">
                <input type="text" name="search" class="search-input"
                       value="{{ request('search') }}"
                       placeholder="Search products...">
                <button type="submit" class="search-btn">
                    <i class="fa fa-search"></i> Search
                </button>
            </form>
        </div>

        <!-- Category Filter -->
        <div class="filter_category">
            <form action="{{ route('products.index') }}" method="GET">
                <select name="category" onchange="this.form.submit()">
                    <option value="">All Categories</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}"
                                {{ request('category') == $category->id ? 'selected' : '' }}>
                            {{ $category->nama }}
                        </option>
                    @endforeach
                </select>
            </form>
        </div>

        <!-- Products Grid -->
        <div class="chocolate_container">
            @forelse($products as $product)
                <div class="box">
                    <div class="img-box">
                        <img src="{{ asset('images/' . $product->foto) }}"
                             alt="{{ $product->nama }}">
                    </div>
                    <div class="detail-box">
                        <h6>{{ $product->nama }}</h6>
                        <h5>Rp. {{ number_format($product->harga, 0, ',', '.') }}</h5>
                        <div class="actions">
                            <form action="{{ route('cart.add') }}" method="POST" class="d-inline">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="hidden" name="quantity" value="1">
                                <button type="submit" class="btn-buy">BUY NOW</button>
                            </form>
                            <form action="{{ route('cart.add') }}" method="POST" class="d-inline">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="hidden" name="quantity" value="1">
                                <button type="submit" class="cart-icon">
                                    <i class="fa fa-shopping-cart"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p>No products found.</p>
                </div>
            @endforelse
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Flash messages
    @if(session('success'))
        alert("{{ session('success') }}");
    @endif

    @if(session('error'))
        alert("{{ session('error') }}");
    @endif
});
</script>
@endsection
