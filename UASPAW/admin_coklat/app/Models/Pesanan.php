<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $table = 'pesanan';
    protected $fillable = ['produk_id', 'nama', 'email', 'jumlah', 'total_harga', 'tanggal_pemesanan', 'status', 'alamat_pengiriman', 'metode_pembayaran'];

    // Definisikan relasi belongsTo dengan Produk
    public function produk()
    {
        return $this->belongsTo(Produk::class, 'produk_id');
    }

    public $timestamps = false;
}
