<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <div class="container">
        <h2><i class="fas fa-shopping-cart icon"></i>Form Pemesanan Produk</h2>

        <!-- Tampilkan items keranjang -->
        <div class="cart-items">
            @foreach($cartItems as $item)
            <div class="form-group">
                <label>{{ $item->name }}:</label>
                <input type="hidden" name="products[]" value="{{ $item->id }}">
                <p>Harga: Rp. {{ number_format($item->price, 0, ',', '.') }}</p>
                <p>Jumlah: {{ $item->quantity }}</p>
                <p>Subtotal: Rp. {{ number_format($item->subtotal, 0, ',', '.') }}</p>
            </div>
            @endforeach
        </div>

        <form action="{{ route('checkout.process') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama"><i class="fas fa-user icon"></i>Nama:</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email"><i class="fas fa-envelope icon"></i>Email:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="alamat"><i class="fas fa-map-marker-alt icon"></i>Alamat Pengiriman:</label>
                <textarea name="alamat" id="alamat" class="form-control" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="metode_pembayaran"><i class="fas fa-credit-card icon"></i>Metode Pembayaran:</label>
                <select name="metode_pembayaran" id="metode_pembayaran" class="form-control" required>
                    <option value="Transfer Bank">Transfer Bank</option>
                    <option value="COD">COD (Cash on Delivery)</option>
                    <option value="Kartu Kredit">Kartu Kredit</option>
                </select>
            </div>

            <div class="form-group">
                <label>Total Harga Semua Produk:</label>
                <p>Rp. {{ number_format($grandTotal, 0, ',', '.') }}</p>
            </div>

            <div class="form-group">
                <button type="submit" class="btn">Pesan Sekarang</button>
            </div>
        </form>
    </div>
</body>
</html>
