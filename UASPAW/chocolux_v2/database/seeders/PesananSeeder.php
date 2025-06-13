<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
                DB::table('pesanan')->insert([
            [
                'id' => 1,
                'produk_id' => 1,
                'nama' => 'berlian wanna',
                'email' => 'berlian.wanna@gmail.com',
                'jumlah' => 2,
                'total_harga' => 28000.00,
                'tanggal_pemesanan' => '2024-12-04 03:03:23',
                'status' => 'Selesai',
                'alamat_pengiriman' => 'bukit unsri',
                'metode_pembayaran' => 'COD',
                'user_id' => 0
            ],
            [
                'id' => 3,
                'produk_id' => 1,
                'nama' => 'Coklat Premium',
                'email' => 'user@example.com',
                'jumlah' => 2,
                'total_harga' => 150000.00,
                'tanggal_pemesanan' => '2024-12-04 03:24:03',
                'status' => 'Selesai',
                'alamat_pengiriman' => 'Jl. Coklat No. 5',
                'metode_pembayaran' => 'Transfer',
                'user_id' => 1
            ],
        ]);
    }
}
