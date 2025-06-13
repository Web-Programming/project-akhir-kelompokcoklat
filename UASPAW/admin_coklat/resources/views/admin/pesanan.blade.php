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
                <i class="fas fa-shopping-cart me-2" style="color: #8B4513;"></i>
                <span class="fw-semibold">Pesanan</span>
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
                                <i class="fas fa-shopping-cart me-3"></i>Manajemen Pesanan
                            </h2>
                            <p class="mb-0 opacity-90">Kelola dan pantau semua pesanan pelanggan</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <i class="fas fa-clipboard-list" style="font-size: 3rem; opacity: 0.3;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-lg-3 col-md-6">
            <div class="card border-0 h-100" style="background: linear-gradient(135deg, #17a2b8, #138496); border-radius: 15px;">
                <div class="card-body text-white text-center p-4">
                    <i class="fas fa-clock fa-2x mb-3"></i>
                    <h5 class="fw-bold">Pending</h5>
                    <h3>{{ $pemesanan->where('status', 'Pending')->count() }}</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card border-0 h-100" style="background: linear-gradient(135deg, #28a745, #1e7e34); border-radius: 15px;">
                <div class="card-body text-white text-center p-4">
                    <i class="fas fa-truck fa-2x mb-3"></i>
                    <h5 class="fw-bold">Terkirim</h5>
                    <h3>{{ $pemesanan->where('status', 'Terkirim')->count() }}</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card border-0 h-100" style="background: linear-gradient(135deg, #007bff, #0056b3); border-radius: 15px;">
                <div class="card-body text-white text-center p-4">
                    <i class="fas fa-check-circle fa-2x mb-3"></i>
                    <h5 class="fw-bold">Selesai</h5>
                    <h3>{{ $pemesanan->where('status', 'Selesai')->count() }}</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card border-0 h-100" style="background: linear-gradient(135deg, #dc3545, #c82333); border-radius: 15px;">
                <div class="card-body text-white text-center p-4">
                    <i class="fas fa-times-circle fa-2x mb-3"></i>
                    <h5 class="fw-bold">Dibatalkan</h5>
                    <h3>{{ $pemesanan->where('status', 'Dibatalkan')->count() }}</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-lg" style="border-radius: 20px;">
        <div class="card-header border-0 text-white py-4" style="background: linear-gradient(45deg, #8B4513, #A0522D); border-radius: 20px 20px 0 0;">
            <div class="row align-items-center">
                <div class="col">
                    <h4 class="fw-bold mb-0">
                        <i class="fas fa-list me-2"></i>Daftar Pesanan
                    </h4>
                </div>
                <div class="col-auto">
                    <span class="badge bg-white text-dark px-3 py-2 rounded-pill">
                        {{ $pemesanan->count() }} Total Pesanan
                    </span>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            @if ($pemesanan->isEmpty())
                <div class="text-center py-5">
                    <i class="fas fa-inbox fa-3x text-muted mb-3"></i>
                    <h5 class="text-muted">Belum ada pesanan</h5>
                    <p class="text-muted">Pesanan akan muncul di sini ketika pelanggan melakukan pemesanan</p>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead style="background-color: #f8f9fa;">
                            <tr>
                                <th class="border-0 py-3 px-4 fw-semibold" style="color: #8B4513;">
                                    <i class="fas fa-hashtag me-2"></i>ID
                                </th>
                                <th class="border-0 py-3 fw-semibold" style="color: #8B4513;">
                                    <i class="fas fa-box me-2"></i>Produk
                                </th>
                                <th class="border-0 py-3 fw-semibold" style="color: #8B4513;">
                                    <i class="fas fa-user me-2"></i>Pelanggan
                                </th>
                                <th class="border-0 py-3 fw-semibold" style="color: #8B4513;">
                                    <i class="fas fa-envelope me-2"></i>Email
                                </th>
                                <th class="border-0 py-3 fw-semibold" style="color: #8B4513;">
                                    <i class="fas fa-sort-numeric-up me-2"></i>Jumlah
                                </th>
                                <th class="border-0 py-3 fw-semibold" style="color: #8B4513;">
                                    <i class="fas fa-money-bill me-2"></i>Total
                                </th>
                                <th class="border-0 py-3 fw-semibold" style="color: #8B4513;">
                                    <i class="fas fa-calendar me-2"></i>Tanggal
                                </th>
                                <th class="border-0 py-3 fw-semibold" style="color: #8B4513;">
                                    <i class="fas fa-info-circle me-2"></i>Status
                                </th>
                                <th class="border-0 py-3 text-center fw-semibold" style="color: #8B4513;">
                                    <i class="fas fa-cogs me-2"></i>Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pemesanan as $pesanan)
                                <tr class="border-0">
                                    <td class="py-3 px-4 align-middle">
                                        <span class="badge bg-light text-dark rounded-pill px-3 py-2">
                                            #{{ $pesanan->id }}
                                        </span>
                                    </td>
                                    <td class="py-3 align-middle">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-primary bg-opacity-10 rounded-circle p-2 me-3">
                                                <i class="fas fa-box" style="color: #8B4513;"></i>
                                            </div>
                                            <span class="fw-semibold">{{ $pesanan->produk->nama }}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 align-middle">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-info bg-opacity-10 rounded-circle p-2 me-3">
                                                <i class="fas fa-user" style="color: #17a2b8;"></i>
                                            </div>
                                            <span>{{ $pesanan->nama }}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 align-middle">
                                        <small class="text-muted">{{ $pesanan->email }}</small>
                                    </td>
                                    <td class="py-3 align-middle">
                                        <span class="badge bg-secondary rounded-pill">{{ $pesanan->jumlah }}x</span>
                                    </td>
                                    <td class="py-3 align-middle">
                                        <span class="fw-bold text-success">Rp {{ number_format($pesanan->total_harga, 0, ',', '.') }}</span>
                                    </td>
                                    <td class="py-3 align-middle">
                                        <small class="text-muted">{{ $pesanan->tanggal_pemesanan }}</small>
                                    </td>
                                    <td class="py-3 align-middle">
                                        @if($pesanan->status == 'Pending')
                                            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill">
                                                <i class="fas fa-clock me-1"></i>{{ $pesanan->status }}
                                            </span>
                                        @elseif($pesanan->status == 'Terkirim')
                                            <span class="badge bg-success px-3 py-2 rounded-pill">
                                                <i class="fas fa-truck me-1"></i>{{ $pesanan->status }}
                                            </span>
                                        @elseif($pesanan->status == 'Selesai')
                                            <span class="badge bg-primary px-3 py-2 rounded-pill">
                                                <i class="fas fa-check-circle me-1"></i>{{ $pesanan->status }}
                                            </span>
                                        @else
                                            <span class="badge bg-danger px-3 py-2 rounded-pill">
                                                <i class="fas fa-times-circle me-1"></i>{{ $pesanan->status }}
                                            </span>
                                        @endif
                                    </td>
                                    <td class="py-3 text-center align-middle">
                                        @if ($pesanan->status == 'Pending')
                                            <div class="btn-group" role="group">
                                                <form action="{{ route('admin.pesanan.update', $pesanan->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('PATCH')
                                                    <input type="hidden" name="status" value="Terkirim">
                                                    <button type="submit" class="btn btn-success btn-sm rounded-pill me-1" title="Approve">
                                                        <i class="fas fa-check"></i>
                                                    </button>
                                                </form>
                                                <form action="{{ route('admin.pesanan.update', $pesanan->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('PATCH')
                                                    <input type="hidden" name="status" value="Dibatalkan">
                                                    <button type="submit" class="btn btn-danger btn-sm rounded-pill" title="Decline">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        @elseif ($pesanan->status == 'Terkirim')
                                            <form action="{{ route('admin.pesanan.update', $pesanan->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('PATCH')
                                                <input type="hidden" name="status" value="Selesai">
                                                <button type="submit" class="btn btn-primary btn-sm rounded-pill" title="Tandai Selesai">
                                                    <i class="fas fa-flag-checkered me-1"></i>Selesai
                                                </button>
                                            </form>
                                        @else
                                            <span class="text-muted">
                                                <i class="fas fa-minus"></i>
                                            </span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
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

        .btn-group .btn {
            transition: all 0.3s ease;
        }

        .btn-group .btn:hover {
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

        .badge {
            font-size: 0.8rem;
        }

        .btn-sm {
            padding: 0.375rem 0.75rem;
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

            const statusButtons = document.querySelectorAll('button[type="submit"]');
            statusButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    const status = this.parentNode.querySelector('input[name="status"]').value;
                    let message = '';

                    switch(status) {
                        case 'Terkirim':
                            message = 'Yakin ingin menyetujui pesanan ini?';
                            break;
                        case 'Dibatalkan':
                            message = 'Yakin ingin membatalkan pesanan ini?';
                            break;
                        case 'Selesai':
                            message = 'Yakin ingin menandai pesanan ini sebagai selesai?';
                            break;
                    }

                    if (message && !confirm(message)) {
                        e.preventDefault();
                    }
                });
            });
        });
    </script>
@endsection
