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
                <i class="fas fa-users me-2" style="color: #8B4513;"></i>
                <span class="fw-semibold">Pengguna</span>
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
                                <i class="fas fa-users me-3"></i>Manajemen Pengguna
                            </h2>
                            <p class="mb-0 opacity-90">Kelola semua pengguna yang terdaftar di sistem</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <i class="fas fa-user-friends" style="font-size: 3rem; opacity: 0.3;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-lg-4 col-md-6 mx-auto">
            <div class="card border-0 h-100" style="background: linear-gradient(135deg, #17a2b8, #138496); border-radius: 20px;">
                <div class="card-body text-white text-center p-4">
                    <i class="fas fa-users fa-3x mb-3"></i>
                    <h3 class="fw-bold mb-2">Total Pengguna</h3>
                    <h1 class="display-4 fw-bold">{{ $users->count() }}</h1>
                    <p class="mb-0 opacity-90">Pengguna terdaftar</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-lg" style="border-radius: 20px;">
        <div class="card-header border-0 text-white py-4" style="background: linear-gradient(45deg, #8B4513, #A0522D); border-radius: 20px 20px 0 0;">
            <div class="row align-items-center">
                <div class="col">
                    <h4 class="fw-bold mb-0">
                        <i class="fas fa-list me-2"></i>Daftar Pengguna Terdaftar
                    </h4>
                </div>
                <div class="col-auto">
                    <span class="badge bg-white text-dark px-3 py-2 rounded-pill">
                        {{ $users->count() }} Pengguna
                    </span>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            @if ($users->isEmpty())
                <div class="text-center py-5">
                    <i class="fas fa-user-slash fa-3x text-muted mb-3"></i>
                    <h5 class="text-muted">Belum ada pengguna terdaftar</h5>
                    <p class="text-muted">Pengguna akan muncul di sini setelah melakukan registrasi</p>
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
                                    <i class="fas fa-user me-2"></i>Nama Lengkap
                                </th>
                                <th class="border-0 py-3 fw-semibold" style="color: #8B4513;">
                                    <i class="fas fa-envelope me-2"></i>Email
                                </th>
                                <th class="border-0 py-3 text-center fw-semibold" style="color: #8B4513;">
                                    <i class="fas fa-cogs me-2"></i>Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr class="border-0" id="user-row-{{ $user->id }}">
                                    <td class="py-3 px-4 align-middle">
                                        <span class="badge bg-light text-dark rounded-pill px-3 py-2">
                                            #{{ $user->id }}
                                        </span>
                                    </td>
                                    <td class="py-3 align-middle">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3">
                                                <i class="fas fa-user" style="color: #8B4513;"></i>
                                            </div>
                                            <div>
                                                <span class="fw-semibold">{{ htmlspecialchars($user->full_name) }}</span>
                                                <br>
                                                <small class="text-muted">Pengguna</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-3 align-middle">
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-envelope text-muted me-2"></i>
                                            <span>{{ htmlspecialchars($user->email) }}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 text-center align-middle">
                                        <button type="button"
                                                class="btn btn-outline-danger btn-sm rounded-pill px-3"
                                                data-bs-toggle="modal"
                                                data-bs-target="#deleteModal{{ $user->id }}">
                                            <i class="fas fa-trash me-1"></i>Hapus
                                        </button>
                                    </td>
                                </tr>

                                <div class="modal fade" id="deleteModal{{ $user->id }}" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content border-0" style="border-radius: 20px;">
                                            <div class="modal-header border-0 text-white" style="background: linear-gradient(45deg, #dc3545, #c82333); border-radius: 20px 20px 0 0;">
                                                <h5 class="modal-title fw-bold">
                                                    <i class="fas fa-exclamation-triangle me-2"></i>Konfirmasi Hapus
                                                </h5>
                                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body p-4">
                                                <div class="text-center">
                                                    <i class="fas fa-user-times fa-3x text-danger mb-3"></i>
                                                    <h5>Yakin ingin menghapus pengguna ini?</h5>
                                                    <p class="text-muted">
                                                        Pengguna "<strong>{{ htmlspecialchars($user->full_name) }}</strong>"
                                                        akan dihapus secara permanen.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="modal-footer border-0 justify-content-center">
                                                <button type="button" class="btn btn-secondary rounded-pill px-4" data-bs-dismiss="modal">
                                                    <i class="fas fa-times me-2"></i>Batal
                                                </button>
                                                <form action="{{ route('admin.user.destroy', $user->id) }}" method="POST" style="display:inline;">
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

        .btn-outline-danger:hover {
            transform: translateY(-2px);
            transition: all 0.3s ease;
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
                card.style.animationDelay = `${index * 0.1}s`;
                card.classList.add('fade-in');
            });
        });
    </script>
@endsection
