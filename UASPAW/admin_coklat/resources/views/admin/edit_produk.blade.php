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
                <a href="{{ route('admin.produk') }}" class="text-decoration-none" style="color: #8B4513;">
                    <i class="fas fa-box me-1"></i> Produk
                </a>
            </li>
            <li class="breadcrumb-item active d-flex align-items-center" aria-current="page">
                <i class="fas fa-edit me-2" style="color: #8B4513;"></i>
                <span class="fw-semibold">Edit Produk</span>
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
                                <i class="fas fa-edit me-3"></i>Edit Produk
                            </h2>
                            <p class="mb-0 opacity-90">Perbarui informasi produk coklat Anda</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <i class="fas fa-box-open" style="font-size: 3rem; opacity: 0.3;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card border-0 shadow-lg" style="border-radius: 20px;">
                <div class="card-header border-0 text-white text-center py-4" style="background: linear-gradient(45deg, #D2691E, #F4A460); border-radius: 20px 20px 0 0;">
                    <h4 class="fw-bold mb-0">
                        <i class="fas fa-box me-2"></i>Informasi Produk
                    </h4>
                </div>
                <div class="card-body p-5">
                    @if (session('error'))
                        <div class="alert alert-danger border-0 rounded-3 mb-4" role="alert">
                            <i class="fas fa-exclamation-triangle me-2"></i>{{ session('error') }}
                        </div>
                    @endif

                    <form action="{{ route('admin.produk.update', $produk->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="row g-4">
                            <div class="col-md-6">
                                <label for="nama" class="form-label fw-semibold" style="color: #8B4513;">
                                    <i class="fas fa-tag me-2"></i>Nama Produk
                                </label>
                                <input type="text"
                                       id="nama"
                                       name="nama"
                                       value="{{ old('nama', $produk->nama) }}"
                                       class="form-control form-control-lg border-0 shadow-sm"
                                       autocomplete="off"
                                       required
                                       style="border-radius: 15px; background-color: #f8f9fa;">
                                @error('nama')
                                    <div class="text-danger mt-2">
                                        <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="kategori" class="form-label fw-semibold" style="color: #8B4513;">
                                    <i class="fas fa-list me-2"></i>Kategori
                                </label>
                                <select name="kategori"
                                        id="kategori"
                                        class="form-select form-select-lg border-0 shadow-sm"
                                        required
                                        style="border-radius: 15px; background-color: #f8f9fa;">
                                    <option value="{{ $produk->kategori_id }}">{{ $produk->kategori->nama }}</option>
                                    @foreach ($kategori as $kat)
                                        @if ($kat->id != $produk->kategori_id)
                                            <option value="{{ $kat->id }}">{{ $kat->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('kategori')
                                    <div class="text-danger mt-2">
                                        <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="harga" class="form-label fw-semibold" style="color: #8B4513;">
                                    <i class="fas fa-money-bill me-2"></i>Harga (Rp)
                                </label>
                                <input type="number"
                                       id="harga"
                                       name="harga"
                                       value="{{ old('harga', $produk->harga) }}"
                                       class="form-control form-control-lg border-0 shadow-sm"
                                       required
                                       style="border-radius: 15px; background-color: #f8f9fa;">
                                @error('harga')
                                    <div class="text-danger mt-2">
                                        <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="stok" class="form-label fw-semibold" style="color: #8B4513;">
                                    <i class="fas fa-warehouse me-2"></i>Ketersediaan Stok
                                </label>
                                <select name="ketersediaan_stok"
                                        id="stok"
                                        class="form-select form-select-lg border-0 shadow-sm"
                                        required
                                        style="border-radius: 15px; background-color: #f8f9fa;">
                                    <option value="Tersedia" {{ $produk->ketersediaan_stok == 'Tersedia' ? 'selected' : '' }}>
                                        <i class="fas fa-check-circle"></i> Tersedia
                                    </option>
                                    <option value="Habis" {{ $produk->ketersediaan_stok == 'Habis' ? 'selected' : '' }}>
                                        <i class="fas fa-times-circle"></i> Habis
                                    </option>
                                </select>
                                @error('ketersediaan_stok')
                                    <div class="text-danger mt-2">
                                        <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="foto" class="form-label fw-semibold" style="color: #8B4513;">
                                    <i class="fas fa-camera me-2"></i>Foto Produk
                                </label>
                                <input type="file"
                                       id="foto"
                                       name="foto"
                                       class="form-control form-control-lg border-0 shadow-sm"
                                       style="border-radius: 15px; background-color: #f8f9fa;">

                                @if ($produk->foto)
                                    <div class="mt-3">
                                        <p class="text-muted mb-2">Foto saat ini:</p>
                                        <div class="position-relative d-inline-block">
                                            <img src="{{ asset('foto/' . $produk->foto) }}"
                                                 alt="Foto Produk"
                                                 class="img-thumbnail shadow-sm"
                                                 width="200"
                                                 style="border-radius: 15px; border: 3px solid #f8f9fa;">
                                            <div class="position-absolute top-0 start-0 bg-success text-white px-2 py-1 rounded-pill" style="font-size: 0.8rem;">
                                                <i class="fas fa-check me-1"></i>Current
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @error('foto')
                                    <div class="text-danger mt-2">
                                        <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Detail Produk -->
                            <div class="col-12">
                                <label for="detail" class="form-label fw-semibold" style="color: #8B4513;">
                                    <i class="fas fa-align-left me-2"></i>Detail Produk
                                </label>
                                <textarea name="detail"
                                          id="detail"
                                          cols="20"
                                          rows="5"
                                          class="form-control form-control-lg border-0 shadow-sm"
                                          placeholder="Masukkan detail produk..."
                                          style="border-radius: 15px; background-color: #f8f9fa;">{{ old('detail', $produk->detail) }}</textarea>
                                @error('detail')
                                    <div class="text-danger mt-2">
                                        <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="row g-3 mt-5">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-brown btn-lg w-100" style="border-radius: 15px;">
                                    <i class="fas fa-save me-2"></i>Update Produk
                                </button>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.produk') }}" class="btn btn-outline-secondary btn-lg w-100" style="border-radius: 15px;">
                                    <i class="fas fa-arrow-left me-2"></i>Kembali ke Daftar
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .form-control:focus, .form-select:focus {
            border-color: #8B4513;
            box-shadow: 0 0 0 0.2rem rgba(139, 69, 19, 0.25);
        }

        .btn-outline-secondary:hover {
            transform: translateY(-2px);
            transition: all 0.3s ease;
        }

        .img-thumbnail {
            transition: all 0.3s ease;
        }

        .img-thumbnail:hover {
            transform: scale(1.05);
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

            const fotoInput = document.getElementById('foto');
            fotoInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        let preview = document.getElementById('foto-preview');
                        if (!preview) {
                            preview = document.createElement('div');
                            preview.id = 'foto-preview';
                            preview.className = 'mt-3';
                            fotoInput.parentNode.appendChild(preview);
                        }

                        preview.innerHTML = `
                            <p class="text-muted mb-2">Preview foto baru:</p>
                            <div class="position-relative d-inline-block">
                                <img src="${e.target.result}"
                                     alt="Preview"
                                     class="img-thumbnail shadow-sm"
                                     width="200"
                                     style="border-radius: 15px; border: 3px solid #f8f9fa;">
                                <div class="position-absolute top-0 start-0 bg-info text-white px-2 py-1 rounded-pill" style="font-size: 0.8rem;">
                                    <i class="fas fa-eye me-1"></i>Preview
                                </div>
                            </div>
                        `;
                    };
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
@endsection
