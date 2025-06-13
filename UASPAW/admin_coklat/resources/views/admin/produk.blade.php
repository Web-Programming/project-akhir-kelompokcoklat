@extends('layouts.admin')

@section('content')
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb bg-white rounded-pill px-4 py-3 shadow-sm">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.index') }}" class="text-decoration-none" style="color: #8B4513;">
                    <i class="fas fa-home me-1"></i> Home
                </a>
            </li>
            <li class="breadcrumb-item active d-flex align-items-center" aria-current="page">
                <i class="fas fa-box me-2" style="color: #8B4513;"></i>
                <span class="fw-semibold">Produk</span>
            </li>
        </ol>
    </nav>

    <div class="row mb-5">
        <div class="col-12">
            <div class="card border-0" style="background: linear-gradient(135deg, #8B4513, #A0522D); border-radius: 20px;">
                <div class="card-body text-white p-4">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h2 class="fw-bold mb-2">
                                <i class="fas fa-box me-3"></i>Manajemen Produk
                            </h2>
                            <p class="mb-0 opacity-90">Kelola semua produk coklat Anda</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <i class="fas fa-boxes" style="font-size: 3rem; opacity: 0.3;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (session('message'))
        <div class="alert alert-success border-0 rounded-3 mb-4" role="alert">
            <i class="fas fa-check-circle me-2"></i>{{ session('message') }}
        </div>
    @endif

    <div class="row mb-4">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm" style="border-radius: 15px;">
                <div class="card-body p-4">
                    <h5 class="fw-bold mb-3" style="color: #8B4513;">
                        <i class="fas fa-search me-2"></i>Pencarian Produk
                    </h5>
                    <form action="{{ route('admin.produk') }}" method="POST">
                        @csrf
                        <div class="input-group">
                            <span class="input-group-text border-0"
                                style="background-color: #f8f9fa; border-radius: 15px 0 0 15px;">
                                <i class="fas fa-search" style="color: #8B4513;"></i>
                            </span>
                            <input type="text" name="search" class="form-control border-0"
                                placeholder="Cari produk berdasarkan nama..." value="{{ old('search', $search ?? '') }}"
                                style="background-color: #f8f9fa;">
                            <button class="btn btn-brown" type="submit" style="border-radius: 0 15px 15px 0;">
                                <i class="fas fa-search me-2"></i>Cari
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm h-100" style="border-radius: 15px;">
                <div class="card-body p-4 d-flex align-items-center justify-content-center">
                    <a href="{{ route('admin.tambah_produk') }}" class="btn btn-brown btn-lg w-100"
                        style="border-radius: 15px;">
                        <i class="fas fa-plus me-2"></i>Tambah Produk Baru
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-lg" style="border-radius: 20px;">
        <div class="card-header border-0 text-white py-4"
            style="background: linear-gradient(45deg, #8B4513, #A0522D); border-radius: 20px 20px 0 0;">
            <div class="row align-items-center">
                <div class="col">
                    <h4 class="fw-bold mb-0">
                        <i class="fas fa-list me-2"></i>Daftar Produk
                    </h4>
                </div>
                <div class="col-auto">
                    <span class="badge bg-white text-dark px-3 py-2 rounded-pill">
                        {{ $jumlahProduk }} Produk
                    </span>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            @if ($jumlahProduk == 0)
                <div class="text-center py-5">
                    <i class="fas fa-box-open fa-3x text-muted mb-3"></i>
                    <h5 class="text-muted">Belum ada produk</h5>
                    <p class="text-muted">Tambahkan produk pertama Anda!</p>
                    <a href="{{ route('admin.tambah_produk') }}" class="btn btn-brown mt-3">
                        <i class="fas fa-plus me-2"></i>Tambah Produk
                    </a>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead style="background-color: #f8f9fa;">
                            <tr>
                                <th class="border-0 py-3 px-4 fw-semibold" style="color: #8B4513;">
                                    <i class="fas fa-hashtag me-2"></i>No.
                                </th>
                                <th class="border-0 py-3 fw-semibold" style="color: #8B4513;">
                                    <i class="fas fa-image me-2"></i>Foto
                                </th>
                                <th class="border-0 py-3 fw-semibold" style="color: #8B4513;">
                                    <i class="fas fa-tag me-2"></i>Nama
                                </th>
                                <th class="border-0 py-3 fw-semibold" style="color: #8B4513;">
                                    <i class="fas fa-list me-2"></i>Kategori
                                </th>
                                <th class="border-0 py-3 fw-semibold" style="color: #8B4513;">
                                    <i class="fas fa-money-bill me-2"></i>Harga
                                </th>
                                <th class="border-0 py-3 fw-semibold" style="color: #8B4513;">
                                    <i class="fas fa-warehouse me-2"></i>Stok
                                </th>
                                <th class="border-0 py-3 text-center fw-semibold" style="color: #8B4513;">
                                    <i class="fas fa-cogs me-2"></i>Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $index => $product)
                                <tr class="border-0">
                                    <td class="py-3 px-4 align-middle">
                                        <span class="badge bg-light text-dark rounded-circle px-2 py-1">
                                            {{ $index + 1 }}
                                        </span>
                                    </td>
                                    <td class="py-3 align-middle">
                                        <div class="position-relative">
                                            <img src="{{ asset('foto/' . htmlspecialchars($product->foto)) }}"
                                                alt="Foto Produk" class="img-thumbnail shadow-sm"
                                                style="width: 60px; height: 60px; object-fit: cover; border-radius: 10px;">
                                        </div>
                                    </td>
                                    <td class="py-3 align-middle">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-primary bg-opacity-10 rounded-circle p-2 me-3">
                                                <i class="fas fa-box" style="color: #8B4513;"></i>
                                            </div>
                                            <span class="fw-semibold">{{ htmlspecialchars($product->nama) }}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 align-middle">
                                        <span class="badge bg-secondary bg-opacity-10 text-dark px-3 py-2 rounded-pill">
                                            {{ htmlspecialchars($product->nama_kategori) }}
                                        </span>
                                    </td>
                                    <td class="py-3 align-middle">
                                        <span class="fw-bold text-success">
                                            Rp {{ number_format($product->harga, 0, ',', '.') }}
                                        </span>
                                    </td>
                                    <td class="py-3 align-middle">
                                        @if ($product->ketersediaan_stok == 'tersedia')
                                            <span class="badge bg-success px-3 py-2 rounded-pill">
                                                <i class="fas fa-check-circle me-1"></i>Tersedia
                                            </span>
                                        @else
                                            <span class="badge bg-danger px-3 py-2 rounded-pill">
                                                <i class="fas fa-times-circle me-1"></i>Habis
                                            </span>
                                        @endif
                                    </td>
                                    <td class="py-3 text-center align-middle">
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('admin.edit_produk', $product->id) }}"
                                                class="btn btn-outline-warning btn-sm rounded-pill me-1">
                                                <i class="fas fa-edit me-1"></i>Edit
                                            </a>
                                            <button type="button"
                                                class="btn btn-outline-danger btn-sm rounded-pill delete-product-btn"
                                                data-product-id="{{ $product->id }}"
                                                data-product-name="{{ htmlspecialchars($product->nama) }}">
                                                <i class="fas fa-trash me-1"></i>Hapus
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>

    <div class="modal fade" id="deleteProductModal" tabindex="-1" aria-labelledby="deleteProductModalLabel"
        aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0" style="border-radius: 20px;">
                <div class="modal-header border-0 text-white"
                    style="background: linear-gradient(45deg, #dc3545, #c82333); border-radius: 20px 20px 0 0;">
                    <h5 class="modal-title fw-bold" id="deleteProductModalLabel">
                        <i class="fas fa-exclamation-triangle me-2"></i>Konfirmasi Hapus Produk
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="text-center">
                        <i class="fas fa-box fa-3x text-danger mb-3"></i>
                        <h5>Yakin ingin menghapus produk ini?</h5>
                        <p class="text-muted">
                            Produk "<strong id="productNameToDelete"></strong>" akan dihapus secara permanen.
                        </p>
                        <div class="alert alert-warning border-0 rounded-3 mt-3">
                            <i class="fas fa-exclamation-triangle me-2"></i>
                            <strong>Peringatan:</strong> Tindakan ini tidak dapat dibatalkan!
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0 justify-content-center">
                    <button type="button" class="btn btn-secondary rounded-pill px-4" data-bs-dismiss="modal">
                        <i class="fas fa-times me-2"></i>Batal
                    </button>
                    <form id="deleteProductForm" action="" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="id" id="productIdToDelete">
                        <button type="submit" class="btn btn-danger rounded-pill px-4" id="confirmDeleteBtn">
                            <i class="fas fa-trash me-2"></i>Ya, Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .table tbody tr:hover {
            background-color: rgba(139, 69, 19, 0.05);
            transform: translateX(5px);
            transition: all 0.3s ease;
        }

        .btn-outline-warning:hover,
        .btn-outline-danger:hover {
            transform: translateY(-2px);
            transition: all 0.3s ease;
        }

        .img-thumbnail {
            transition: all 0.3s ease;
        }

        .img-thumbnail:hover {
            transform: scale(1.1);
        }

        .fade-in {
            animation: fadeInUp 0.6s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .modal {
            z-index: 1055 !important;
        }

        .modal-backdrop {
            z-index: 1050 !important;
        }

        .modal-dialog {
            pointer-events: auto;
        }

        .modal-content {
            pointer-events: auto;
        }

        body.modal-open {
            overflow: hidden;
        }

        .btn-loading {
            pointer-events: none;
            opacity: 0.6;
        }
    </style>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.card');
            cards.forEach((card, index) => {
                card.style.animationDelay = `${index * 0.1}s`;
                card.classList.add('fade-in');
            });

            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                if (!alert.classList.contains('alert-warning')) {
                    setTimeout(() => {
                        alert.style.transition = 'opacity 0.5s ease';
                        alert.style.opacity = '0';
                        setTimeout(() => alert.remove(), 500);
                    }, 5000);
                }
            });

            const deleteButtons = document.querySelectorAll('.delete-product-btn');
            const deleteModal = new bootstrap.Modal(document.getElementById('deleteProductModal'));
            const productNameElement = document.getElementById('productNameToDelete');
            const productIdInput = document.getElementById('productIdToDelete');
            const deleteForm = document.getElementById('deleteProductForm');
            const confirmDeleteBtn = document.getElementById('confirmDeleteBtn');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();

                    const productId = this.getAttribute('data-product-id');
                    const productName = this.getAttribute('data-product-name');

                    productNameElement.textContent = productName;
                    productIdInput.value = productId;

                    deleteForm.action = `{{ url('admin/produk') }}/${productId}`;

                    confirmDeleteBtn.classList.remove('btn-loading');
                    confirmDeleteBtn.innerHTML = '<i class="fas fa-trash me-2"></i>Ya, Hapus';

                    deleteModal.show();
                });
            });

            deleteForm.addEventListener('submit', function(e) {
                confirmDeleteBtn.classList.add('btn-loading');
                confirmDeleteBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Menghapus...';

                const modalButtons = document.querySelectorAll('#deleteProductModal button');
                modalButtons.forEach(btn => btn.disabled = true);

            });

            document.getElementById('deleteProductModal').addEventListener('hidden.bs.modal', function() {
                confirmDeleteBtn.classList.remove('btn-loading');
                confirmDeleteBtn.innerHTML = '<i class="fas fa-trash me-2"></i>Ya, Hapus';

                const modalButtons = document.querySelectorAll('#deleteProductModal button');
                modalButtons.forEach(btn => btn.disabled = false);

                productNameElement.textContent = '';
                productIdInput.value = '';
                deleteForm.action = '';
            });

            document.querySelector('#deleteProductModal .modal-content').addEventListener('click', function(e) {
                e.stopPropagation();
            });
        });
    </script>
@endsection
