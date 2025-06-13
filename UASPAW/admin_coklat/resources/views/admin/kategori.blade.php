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
                <i class="fas fa-tags me-2" style="color: #8B4513;"></i>
                <span class="fw-semibold">Kategori</span>
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
                                <i class="fas fa-tags me-3"></i>Manajemen Kategori
                            </h2>
                            <p class="mb-0 opacity-90">Kelola kategori produk coklat Anda</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <i class="fas fa-layer-group" style="font-size: 3rem; opacity: 0.3;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-5 mb-4">
            <div class="card border-0 shadow-lg" style="border-radius: 20px;">
                <div class="card-header border-0 text-white text-center py-4" style="background: linear-gradient(45deg, #D2691E, #F4A460); border-radius: 20px 20px 0 0;">
                    <h4 class="fw-bold mb-0">
                        <i class="fas fa-plus-circle me-2"></i>Tambah Kategori Baru
                    </h4>
                </div>
                <div class="card-body p-4">
                    @if (session('error'))
                        <div class="alert alert-danger border-0 rounded-3" role="alert">
                            <i class="fas fa-exclamation-triangle me-2"></i>{{ session('error') }}
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success border-0 rounded-3" role="alert">
                            <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('admin.kategori.store') }}" method="post">
                        @csrf
                        <div class="mb-4">
                            <label for="kategori" class="form-label fw-semibold" style="color: #8B4513;">
                                <i class="fas fa-tag me-2"></i>Nama Kategori
                            </label>
                            <input type="text"
                                   id="kategori"
                                   name="kategori"
                                   class="form-control form-control-lg border-0 shadow-sm"
                                   placeholder="Masukkan nama kategori..."
                                   value="{{ old('kategori') }}"
                                   style="border-radius: 15px; background-color: #f8f9fa;">
                            @error('kategori')
                                <div class="text-danger mt-2">
                                    <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-brown btn-lg" type="submit" style="border-radius: 15px;">
                                <i class="fas fa-save me-2"></i>Simpan Kategori
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-7">
            <div class="card border-0 shadow-lg" style="border-radius: 20px;">
                <div class="card-header border-0 text-white py-4" style="background: linear-gradient(45deg, #8B4513, #A0522D); border-radius: 20px 20px 0 0;">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="fw-bold mb-0">
                                <i class="fas fa-list me-2"></i>Daftar Kategori
                            </h4>
                        </div>
                        <div class="col-auto">
                            <span class="badge bg-white text-dark px-3 py-2 rounded-pill">
                                {{ $kategori->count() }} Kategori
                            </span>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    @if ($kategori->isEmpty())
                        <div class="text-center py-5">
                            <i class="fas fa-inbox fa-3x text-muted mb-3"></i>
                            <h5 class="text-muted">Belum ada kategori</h5>
                            <p class="text-muted">Tambahkan kategori pertama Anda!</p>
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
                                            <i class="fas fa-tag me-2"></i>Nama Kategori
                                        </th>
                                        <th class="border-0 py-3 text-center fw-semibold" style="color: #8B4513;">
                                            <i class="fas fa-cogs me-2"></i>Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kategori as $index => $kat)
                                        <tr class="border-0">
                                            <td class="py-3 px-4 align-middle">
                                                <span class="badge bg-light text-dark rounded-circle px-2 py-1">
                                                    {{ $index + 1 }}
                                                </span>
                                            </td>
                                            <td class="py-3 align-middle">
                                                <div class="d-flex align-items-center">
                                                    <div class="bg-primary bg-opacity-10 rounded-circle p-2 me-3">
                                                        <i class="fas fa-tag" style="color: #8B4513;"></i>
                                                    </div>
                                                    <span class="fw-semibold">{{ $kat->nama }}</span>
                                                </div>
                                            </td>
                                            <td class="py-3 text-center align-middle">
                                                <a href="{{ route('admin.kategori.detail', $kat->id) }}"
                                                   class="btn btn-sm btn-outline-primary rounded-pill px-3">
                                                    <i class="fas fa-eye me-1"></i>Detail
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        /* .table tbody tr:hover {
            background-color: rgba(139, 69, 19, 0.05);
            transform: translateX(5px);
            transition: all 0.3s ease;
        } */

        .form-control:focus {
            border-color: #8B4513;
            box-shadow: 0 0 0 0.2rem rgba(139, 69, 19, 0.25);
        }

        .btn-outline-primary {
            border-color: #8B4513;
            color: #8B4513;
        }

        .btn-outline-primary:hover {
            background-color: #8B4513;
            border-color: #8B4513;
            transform: translateY(-2px);
        }

        .card {
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
            const cards = document.querySelectorAll('.card');
            cards.forEach((card, index) => {
                card.style.animationDelay = `${index * 0.2}s`;
                card.classList.add('fade-in');
            });

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
