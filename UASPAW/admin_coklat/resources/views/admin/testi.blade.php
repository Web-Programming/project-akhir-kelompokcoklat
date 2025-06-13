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
                <i class="fas fa-star me-2" style="color: #8B4513;"></i>
                <span class="fw-semibold">Testimoni</span>
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
                                <i class="fas fa-star me-3"></i>Testimoni Pelanggan
                            </h2>
                            <p class="mb-0 opacity-90">Kelola feedback dan testimoni dari pelanggan</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <i class="fas fa-comments" style="font-size: 3rem; opacity: 0.3;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-lg-4 col-md-6 mx-auto">
            <div class="card border-0 h-100" style="background: linear-gradient(135deg, #ffc107, #e0a800); border-radius: 20px;">
                <div class="card-body text-white text-center p-4">
                    <i class="fas fa-star fa-3x mb-3"></i>
                    <h3 class="fw-bold mb-2">Total Testimoni</h3>
                    <h1 class="display-4 fw-bold">{{ $testimoni->count() }}</h1>
                    <p class="mb-0 opacity-90">Testimoni pelanggan</p>
                </div>
            </div>
        </div>
    </div>

    <div id="testimoni-container">
        @if ($testimoni->isEmpty())
            <div class="card border-0 shadow-lg" style="border-radius: 20px;">
                <div class="card-body text-center py-5">
                    <i class="fas fa-comment-slash fa-3x text-muted mb-3"></i>
                    <h5 class="text-muted">Belum ada testimoni</h5>
                    <p class="text-muted">Testimoni pelanggan akan muncul di sini</p>
                </div>
            </div>
        @else
            <div class="row g-4">
                @foreach ($testimoni as $row)
                    <div class="col-lg-6 col-md-6" id="testi-{{ $row->id }}">
                        <div class="card border-0 shadow-lg h-100 testi-card" style="border-radius: 20px; transition: all 0.3s ease;">
                            <div class="card-header border-0 text-white py-3" style="background: linear-gradient(45deg, #D2691E, #F4A460); border-radius: 20px 20px 0 0;">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="fw-bold mb-0">
                                            <i class="fas fa-user-circle me-2"></i>{{ htmlspecialchars($row->name) }}
                                        </h5>
                                    </div>
                                    <div class="col-auto">
                                        <div class="text-warning">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-4">
                                <div class="mb-3">
                                    <i class="fas fa-quote-left fa-2x text-muted opacity-50 mb-3"></i>
                                    <p class="mb-0 fs-6 lh-base">{{ htmlspecialchars($row->message) }}</p>
                                    <i class="fas fa-quote-right fa-2x text-muted opacity-50 mt-3 float-end"></i>
                                </div>
                            </div>
                            <div class="card-footer border-0 bg-transparent p-4 pt-0">
                                <button class="btn btn-outline-danger w-100 delete-btn rounded-pill"
                                        data-id="{{ $row->id }}"
                                        style="transition: all 0.3s ease;">
                                    <i class="fas fa-trash me-2"></i>Hapus Testimoni
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    <div id="messageContainer" class="position-fixed top-0 end-0 p-3" style="z-index: 1050;"></div>
@endsection

@section('styles')
    <style>
        .testi-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15) !important;
        }

        .delete-btn:hover {
            transform: translateY(-2px);
            background-color: #dc3545;
            border-color: #dc3545;
            color: white;
        }

        .fade-in {
            animation: fadeInUp 0.6s ease-out;
        }

        .fade-out {
            animation: fadeOut 0.5s ease-out forwards;
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

        @keyframes fadeOut {
            from {
                opacity: 1;
                transform: scale(1);
            }
            to {
                opacity: 0;
                transform: scale(0.8);
            }
        }

        .alert {
            border-radius: 15px;
            border: none;
        }
    </style>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.testi-card').each(function(index) {
                $(this).css('animation-delay', (index * 0.1) + 's');
                $(this).addClass('fade-in');
            });

            function showMessage(message, type = 'success') {
                const alertClass = type === 'success' ? 'alert-success' : 'alert-danger';
                const icon = type === 'success' ? 'fas fa-check-circle' : 'fas fa-exclamation-triangle';

                const messageHtml = `
                    <div class="alert ${alertClass} shadow-lg" role="alert">
                        <i class="${icon} me-2"></i>${message}
                    </div>
                `;

                $('#messageContainer').html(messageHtml);

                setTimeout(function() {
                    $('#messageContainer .alert').fadeOut();
                }, 3000);
            }

            $('.delete-btn').on('click', function() {
                var id = $(this).data('id');
                var testiCard = $('#testi-' + id);

                if (confirm('Apakah Anda yakin ingin menghapus testimoni ini?')) {
                    $(this).prop('disabled', true).html('<i class="fas fa-spinner fa-spin me-2"></i>Menghapus...');

                    $.ajax({
                        url: '{{ route('admin.testi.delete') }}',
                        type: 'POST',
                        data: {
                            delete_id: id,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            if (response.success) {
                                testiCard.addClass('fade-out');

                                setTimeout(function() {
                                    testiCard.remove();

                                    if ($('.testi-card').length === 0) {
                                        $('#testimoni-container').html(`
                                            <div class="card border-0 shadow-lg" style="border-radius: 20px;">
                                                <div class="card-body text-center py-5">
                                                    <i class="fas fa-comment-slash fa-3x text-muted mb-3"></i>
                                                    <h5 class="text-muted">Belum ada testimoni</h5>
                                                    <p class="text-muted">Testimoni pelanggan akan muncul di sini</p>
                                                </div>
                                            </div>
                                        `);
                                    }
                                }, 500);

                                showMessage(response.message, 'success');
                            } else {
                                showMessage(response.message, 'error');
                                $(this).prop('disabled', false).html('<i class="fas fa-trash me-2"></i>Hapus Testimoni');
                            }
                        },
                        error: function() {
                            showMessage('Terjadi kesalahan saat menghapus testimoni.', 'error');
                            $(this).prop('disabled', false).html('<i class="fas fa-trash me-2"></i>Hapus Testimoni');
                        }
                    });
                }
            });
        });
    </script>
@endsection
