<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produk_id')->nullable()->constrained('produk')->onDelete('set null');
            $table->string('nama', 255);
            $table->string('email', 255);
            $table->integer('jumlah');
            $table->decimal('total_harga', 10, 2);
            $table->timestamp('tanggal_pemesanan')->useCurrent();
            $table->enum('status', ['Pending', 'Terkirim', 'Selesai', 'Dibatalkan'])->default('Pending');
            $table->text('alamat_pengiriman');
            $table->string('metode_pembayaran', 255);
            $table->integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan');
    }
};
