@extends('layouts.admin')

@section('content')
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb bg-white rounded-pill px-4 py-3 shadow-sm">
            <li class="breadcrumb-item active d-flex align-items-center" aria-current="page">
                <i class="fas fa-home fs-4 me-2" style="color: #8B4513;"></i>
                <span class="fw-semibold">Dashboard</span>
            </li>
        </ol>
    </nav>

    <div class="row mb-5">
        <div class="col-12">
            <div class="card border-0" style="background: linear-gradient(135deg, #8B4513, #A0522D); border-radius: 20px;">
                <div class="card-body text-white p-5">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h1 class="display-5 fw-bold mb-3">Selamat Datang di Admin Panel</h1>
                            <p class="fs-5 opacity-90">Kelola bisnis coklat Anda dengan mudah dan efisien</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <i class="fas fa-chart-line" style="font-size: 5rem; opacity: 0.3;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-12">
            <div class="card border-0" style="background: linear-gradient(135deg, #D2691E, #F4A460); border-radius: 20px;">
                <div class="card-body text-white text-center p-4">
                    <div class="row align-items-center">
                        <div class="col-md-2">
                            <i class="fas fa-calendar-alt fa-3x opacity-75"></i>
                        </div>
                        <div class="col-md-10">
                            <h3 class="fw-bold mb-2">Hari Ini</h3>
                            <p id="tanggal" class="fs-4 mb-0"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-lg-4 col-md-6">
            <div class="card border-0 h-100" style="background: linear-gradient(135deg, #FF6B6B, #FF8E8E); border-radius: 20px;">
                <div class="card-body p-4 text-white">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <div class="bg-white bg-opacity-20 rounded-circle p-3 text-center">
                                <i class="fas fa-tags fa-2x"></i>
                            </div>
                        </div>
                        <div class="col-8">
                            <h3 class="fw-bold mb-1">Kategori</h3>
                            <p class="fs-4 mb-2">{{ $jumlahKategori }} Kategori</p>
                            <a href="{{ route('admin.kategori') }}" class="text-white text-decoration-none fw-semibold">
                                Lihat Detail <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card border-0 h-100" style="background: linear-gradient(135deg, #4ECDC4, #44A08D); border-radius: 20px;">
                <div class="card-body p-4 text-white">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <div class="bg-white bg-opacity-20 rounded-circle p-3 text-center">
                                <i class="fas fa-box fa-2x"></i>
                            </div>
                        </div>
                        <div class="col-8">
                            <h3 class="fw-bold mb-1">Produk</h3>
                            <p class="fs-4 mb-2">{{ $jumlahProduk }} Produk</p>
                            <a href="{{ route('admin.produk') }}" class="text-white text-decoration-none fw-semibold">
                                Lihat Detail <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card border-0 h-100" style="background: linear-gradient(135deg, #A8E6CF, #7FCDCD); border-radius: 20px;">
                <div class="card-body p-4 text-white">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <div class="bg-white bg-opacity-20 rounded-circle p-3 text-center">
                                <i class="fas fa-shopping-cart fa-2x"></i>
                            </div>
                        </div>
                        <div class="col-8">
                            <h3 class="fw-bold mb-1">Pesanan</h3>
                            <p class="fs-4 mb-2">{{ $jumlahPesanan }} Pesanan</p>
                            <a href="{{ route('admin.pesanan') }}" class="text-white text-decoration-none fw-semibold">
                                Lihat Detail <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card border-0">
                <div class="card-body p-4">
                    <h4 class="fw-bold mb-4" style="color: #8B4513;">
                        <i class="fas fa-bolt me-2"></i>Aksi Cepat
                    </h4>
                    <div class="row g-3">
                        <div class="col-md-3 col-sm-6">
                            <a href="{{ route('admin.kategori') }}" class="btn btn-outline-primary w-100 py-3 rounded-3">
                                <i class="fas fa-plus-circle mb-2 d-block fs-4"></i>
                                Tambah Kategori
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="{{ route('admin.produk') }}" class="btn btn-outline-success w-100 py-3 rounded-3">
                                <i class="fas fa-box mb-2 d-block fs-4"></i>
                                Tambah Produk
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="{{ route('admin.pesanan') }}" class="btn btn-outline-warning w-100 py-3 rounded-3">
                                <i class="fas fa-list mb-2 d-block fs-4"></i>
                                Lihat Pesanan
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="{{ route('admin.testi') }}" class="btn btn-outline-info w-100 py-3 rounded-3">
                                <i class="fas fa-star mb-2 d-block fs-4"></i>
                                Kelola Testimoni
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 1050;">
        <div id="toastNotification" class="toast border-0 shadow-lg" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
            <div class="toast-header bg-warning text-dark">
                <i class="fas fa-bell me-2"></i>
                <strong class="me-auto">Notifikasi Baru</strong>
                <small class="text-muted">Baru saja</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body bg-white">
                <i class="fas fa-shopping-cart me-2 text-success"></i>
                Ada pesanan baru yang belum diproses!
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function updateTanggal() {
            var hari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            var bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

            var tanggalSekarang = new Date();
            var hariIni = hari[tanggalSekarang.getDay()];
            var tanggal = tanggalSekarang.getDate();
            var bulanIni = bulan[tanggalSekarang.getMonth()];
            var tahun = tanggalSekarang.getFullYear();

            document.getElementById('tanggal').innerHTML = hariIni + ', ' + tanggal + ' ' + bulanIni + ' ' + tahun;
        }

        updateTanggal();
        setInterval(updateTanggal, 1000);

        setInterval(function() {
            fetch('{{ route('admin.check_new_orders') }}')
                .then(response => response.json())
                .then(data => {
                    if (data.new_order) {
                        var toastEl = document.getElementById('toastNotification');
                        var toast = new bootstrap.Toast(toastEl);
                        toast.show();
                    }
                });
        }, 10000);

        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.card');
            cards.forEach((card, index) => {
                card.style.animationDelay = `${index * 0.1}s`;
                card.classList.add('fade-in');
            });
        });
    </script>
@endsection
