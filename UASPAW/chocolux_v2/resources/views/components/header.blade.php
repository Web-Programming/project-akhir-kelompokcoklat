<!-- Header Section -->
<header class="header_section">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="{{ route('home') }}">ChocoLux</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ Request::routeIs('home') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item {{ Request::routeIs('about') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item {{ Request::routeIs('products*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('products.index') }}">Product</a>
                    </li>
                    <li class="nav-item {{ Request::routeIs('testimonials') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('testimonials') }}">Testimonial</a>
                    </li>
                    <li class="nav-item {{ Request::routeIs('contact') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                    </li>
                    {{-- <li class="nav-item {{ Request::routeIs('orders') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('orders.index') }}">Pesanan Saya</a>
                    </li> --}}
                </ul>
                <div class="quote_btn-container">
                    @if(Session::has('is_logged_in'))
                        <a href="{{ route('cart.index') }}" class="cart-icon">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                {{ Session::get('full_name') }} <i class="fa fa-user"></i>
                            </a>
                            <div class="dropdown-menu">
                                {{-- <a class="dropdown-item" href="{{ route('orders.index') }}">Pesanan Saya</a> --}}
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </div>
                        </div>
                    @else
                        <a href="{{ route('login') }}">
                            <i class="fa fa-user"></i> Login
                        </a>
                    @endif
                </div>
            </div>
        </nav>
    </div>
</header>
