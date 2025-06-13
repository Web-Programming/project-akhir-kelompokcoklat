<nav class="navbar navbar-expand-lg navbar-dark shadow-lg" style="background: linear-gradient(45deg, #8B4513, #A0522D);">
    <div class="container">
        <a class="navbar-brand fw-bold fs-3" href="{{ route('admin.index') }}" style="color: #F4A460;">
            <i class="fas fa-gem me-2"></i>Choco Lux
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-1">
                    <a class="nav-link px-3 py-2 rounded-pill transition-all" href="{{ route('admin.index') }}" style="transition: all 0.3s ease;">
                        <i class="fas fa-home me-1"></i>Home
                    </a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link px-3 py-2 rounded-pill" href="{{ route('admin.kategori') }}" style="transition: all 0.3s ease;">
                        <i class="fas fa-tags me-1"></i>Kategori
                    </a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link px-3 py-2 rounded-pill" href="{{ route('admin.produk') }}" style="transition: all 0.3s ease;">
                        <i class="fas fa-box me-1"></i>Produk
                    </a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link px-3 py-2 rounded-pill" href="{{ route('admin.user') }}" style="transition: all 0.3s ease;">
                        <i class="fas fa-users me-1"></i>User
                    </a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link px-3 py-2 rounded-pill" href="{{ route('admin.pesanan') }}" style="transition: all 0.3s ease;">
                        <i class="fas fa-shopping-cart me-1"></i>Pesanan
                    </a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link px-3 py-2 rounded-pill" href="{{ route('admin.testi') }}" style="transition: all 0.3s ease;">
                        <i class="fas fa-star me-1"></i>Testimoni
                    </a>
                </li>
                @if (Session::get('login'))
                    <li class="nav-item mx-1">
                        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="nav-link btn btn-link px-3 py-2 rounded-pill text-white border-0" style="transition: all 0.3s ease;">
                                <i class="fas fa-sign-out-alt me-1"></i>Logout
                            </button>
                        </form>
                    </li>
                @else
                    <li class="nav-item mx-1">
                        <a class="nav-link px-3 py-2 rounded-pill" href="{{ route('login') }}" style="transition: all 0.3s ease;">
                            <i class="fas fa-sign-in-alt me-1"></i>Login
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<style>
.nav-link:hover {
    background-color: rgba(255, 255, 255, 0.1) !important;
    transform: translateY(-2px);
}

.navbar-brand:hover {
    transform: scale(1.05);
    transition: all 0.3s ease;
}
</style>
