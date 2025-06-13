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
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_id')->nullable()->constrained('kategori')->onDelete('set null');
            $table->string('nama', 255)->nullable()->index();
            $table->double('harga')->nullable();
            $table->string('foto', 255)->nullable();
            $table->text('detail')->nullable();
            $table->enum('ketersediaan_stok', ['habis', 'tersedia'])->default('tersedia');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
