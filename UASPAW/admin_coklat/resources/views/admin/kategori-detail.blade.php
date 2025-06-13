@extends('layouts.admin')

@section('content')
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb bg-white rounded-pill px-4 py-3 shadow-sm">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.index') }}" class="text-decoration-none" style="color: #8B4513;">
                    <i class="fas fa-home me-1"></i> Home
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('admin.kategori') }}" class="text-decoration-none" style="color: #8B4513;">
                    <i class="fas fa-tags me-1"></i> Kategori
                </a>
            </li>
            <li class="breadcrumb-item active d-flex align-items-center" aria-current="page">
                <i class="fas fa-edit me-2" style="color: #8B4513;"></i>
                <span class="fw-semibold">Detail Kategori</span>
            </li>
        </ol>
    </nav>

    <!-- Header Section -->
    <div class="row mb-5">
        <div class="col-12">
            <div class="card border-0" style="background: linear-gradient(135deg, #8B4513, #A0522D); border-radius: 20px;">
                <div class="card-body text-white p-4">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h2 class="fw-bold mb-2">
                                <i class="fas fa-edit me-3"></i>Detail & Edit Kategori
                            </h2>
                            <p class="mb-0 opacity-90">Kelola informasi kategori produk</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <i class="fas fa-cog" style="font-size: 3rem; opacity: 0.3;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <div class="card border-0 shadow-lg" style="border-radius: 20px;">
                <div class="card-header border-0 text-white text-center py-4" style="background: linear-gradient(45deg, #D2691E, #F4A460); border-radius: 20px 20px 0 0;">
                    <h4 class="fw-bold mb-0">
                        <i class="fas fa-tag me-2"></i>Informasi Kategori
                    </h4>
                </div>
                <div class="card-body p-5">
                    @if (session('error'))
                        <div class="alert alert-danger border-0 rounded-3 mb-4" role="alert">
                            <i class="fas fa-exclamation-triangle me-2"></i>{{ session('error') }}
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success border-0 rounded-3 mb-4" role="alert">
                            <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('admin.kategori.update', $kategori->id) }}" method="post">
                        @csrf
                        @method('PATCH')

                        <div class="mb-4">
                            <label for="kategori" class="form-label fw-semibold fs-5" style="color: #8B4513;">
                                <i class="fas fa-tag me-2"></i>Nama Kategori
                            </label>
                            <input type="text"
                                   name="kategori"
                                   id="kategori"
                                   value="{{ old('kategori', $kategori->nama) }}"
                                   class="form-control form-control-lg border-0 shadow-sm"
                                   style="border-radius: 15px; background-color: #f8f9fa; padding: 15px 20px;">
                            @error('kategori')
                                <div class="text-danger mt-2">
                                    <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="row g-3 mt-4">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-brown btn-lg w-100" name="editBtn" style="border-radius: 15px;">
                                    <i class="fas fa-save me-2"></i>Update Kategori
                                </button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-outline-danger btn-lg w-100" style="border-radius: 15px;" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                    <i class="fas fa-trash me-2"></i>Hapus Kategori
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Back Button -->
                    <div class="text-center mt-4">
                        <a href="{{ route('admin.kategori') }}" class="btn btn-outline-secondary btn-lg px-4" style="border-radius: 15px;">
                            <i class="fas fa-arrow-left me-2"></i>Kembali ke Daftar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0" style="border-radius: 20px;">
                <div class="modal-header border-0 text-white" style="background: linear-gradient(45deg, #dc3545, #c82333); border-radius: 20px 20px 0 0;">
                    <h5 class="modal-title fw-bold" id="deleteModalLabel">
                        <i class="fas fa-exclamation-triangle me-2"></i>Konfirmasi Hapus
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="text-center">
                        <i class="fas fa-trash-alt fa-3x text-danger mb-3"></i>
                        <h5>Yakin ingin menghapus kategori ini?</h5>
                        <p class="text-muted">Kategori "<strong>{{ $kategori->nama }}</strong>" akan dihapus secara permanen.</p>
                    </div>
                </div>
                <div class="modal-footer border-0 justify-content-center">
                    <button type="button" class="btn btn-secondary rounded-pill px-4" data-bs-dismiss="modal">
                        <i class="fas fa-times me-2"></i>Batal
                    </button>
                    <form action="{{ route('admin.kategori.destroy', $kategori->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger rounded-pill px-4">
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
        .form-control:focus {
            border-color: #8B4513;
            box-shadow: 0 0 0 0.2rem rgba(139, 69, 19, 0.25);
        }

        .btn-outline-danger:hover {
            transform: translateY(-2px);
            transition: all 0.3s ease;
        }

        .btn-outline-secondary:hover {
            transform: translateY(-2px);
            transition: all 0.3s ease;
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
    </style>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const card = document.querySelector('.card');
            card.classList.add('fade-in');

            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                setTimeout(() => {
                    alert.style.transition = 'opacity 0.5s ease';
                    alert.style.opacity = '0';
                    setTimeout(() => alert.remove(), 500);
                }, 5000);
            });
        });
    </script>
@endsection
