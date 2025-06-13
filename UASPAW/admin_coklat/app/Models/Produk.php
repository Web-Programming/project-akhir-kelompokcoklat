<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $fillable = ['kategori_id', 'nama', 'harga', 'foto', 'detail', 'ketersediaan_stok'];

    // Nonaktifkan timestamps
    public $timestamps = false;

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class, 'produk_id');
    }
}
