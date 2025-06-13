<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('produk')->insert([
            [
                'id' => 1,
                'kategori_id' => 1,
                'nama' => 'SilverQueen Almond Milk',
                'harga' => 14000,
                'foto' => 'tEfFEPFPhMYmNxNYbppC.png',
                'detail' => 'SilverQueen Almond Milk adalah produk coklat susu dengan isian dalam nya menggunakan kacang almond yang crunchy dan lezat serta premium, Berat Produk 55 gram, Exp Mei 2026',
                'ketersediaan_stok' => 'tersedia'
            ],
            [
                'id' => 2,
                'kategori_id' => 1,
                'nama' => 'SilverQueen ChunkyBar Beruang',
                'harga' => 30000,
                'foto' => 'wVGclaByLYjkhkiVHMSK.jpg',
                'detail' => 'SilverQueen ChunkyBar Beruang adalah produk coklat susu dengan isian dalam nya menggunakan kacang mede yang enak dan lezat serta premium, Berat Produk 3pcs x 30gram, Exp Jan 2026',
                'ketersediaan_stok' => 'tersedia'
            ],
            [
                'id' => 3,
                'kategori_id' => 1,
                'nama' => 'SilverQueen Chasew / Mede',
                'harga' => 11500,
                'foto' => 'TgcAoxhbjSTJnLBWGOGV.png',
                'detail' => 'Silverqueen Chasew / Mede adalah produk coklat dengan isian dalam nya menggunakan kacang mede yang enak dan lezat serta premium, Berat Produk 55 gram, Exp Jan 2026',
                'ketersediaan_stok' => 'tersedia'
            ],
            [
                'id' => 4,
                'kategori_id' => 1,
                'nama' => 'SilverQueen ChunkyBar Love',
                'harga' => 26000,
                'foto' => 'mAvyZVLscyXHcqZYahPE.png',
                'detail' => 'SilverQueen ChunkyBar Love Spesial edisi valentine adalah produk coklat susu dengan isian dalam nya menggunakan kacang mede yang enak dan lezat serta premium, Berat Produk 3pcs x 30gram, Exp Feb 2026',
                'ketersediaan_stok' => 'tersedia'
            ],
            [
                'id' => 5,
                'kategori_id' => 2,
                'nama' => 'Cadbury Dairy Milk Roast Almond',
                'harga' => 18000,
                'foto' => 'HqhgadLDcqZwyaxhsYUH.png',
                'detail' => 'Cadbury Dairy Milk Roast Almond adalah coklat susu dengan isian kacang almond yang garing dan enak, Berat produk 40gram, Exp Des 2025',
                'ketersediaan_stok' => 'tersedia'
            ],
            [
                'id' => 6,
                'kategori_id' => 2,
                'nama' => 'Cadbury Dairy Milk Bubbly',
                'harga' => 25000,
                'foto' => 'uCtibwEWDXwPMcRvgqMa.png',
                'detail' => 'Cadbury Dairy Milk Bubbly adalah variasi coklat cadbury yang dibentuk seperti bubble dikombinasikan dengan soft creamy coklat, Berat produk 40gram, Exp Okt 2025',
                'ketersediaan_stok' => 'tersedia'
            ],
            [
                'id' => 7,
                'kategori_id' => 2,
                'nama' => 'Cadbury Dairy Milk Caramel Nibbles Sharebag',
                'harga' => 30000,
                'foto' => 'ReFGlyjrYnLbvFXMMGap.png',
                'detail' => 'Cadbury Dairy Milk Caramel Nibbles adalah coklat cadbury yang dikombinasikan dengan rasa caramel yang legit dan enak kini hadir dengan kemasan share cocok untuk kumpul bersama teman atau kelurga, Berat produk 10pcs x 15gram, Exp Des 2025',
                'ketersediaan_stok' => 'tersedia'
            ],
            [
                'id' => 8,
                'kategori_id' => 3,
                'nama' => 'Ferrero Rocher Premiun Chocolate isi 24pcs',
                'harga' => 195000,
                'foto' => 'kuitpadJgoAbOdaeVoVF.png',
                'detail' => 'Ferrero Rocher Premiun Chocolate adalah coklat hazelnut berkualitas tinggi ditambah crispy wafer yang nikmat mampu menciptakan cita rasa coklat yang istimewa, Berat produk 24pcs x 12,5gram, Exp Ags 2026',
                'ketersediaan_stok' => 'tersedia'
            ],
            [
                'id' => 9,
                'kategori_id' => 3,
                'nama' => 'Ferrero Rocher Premiun Chocolate isi 16pcs',
                'harga' => 110000,
                'foto' => 'ZgpoDlJbESOedAHzpzmO.png',
                'detail' => 'Ferrero Rocher Premiun Chocolate adalah coklat hazelnut berkualitas tinggi ditambah crispy wafer yang nikmat mampu menciptakan cita rasa coklat yang istimewa, Berat produk 16pcs x 12,5gram, Exp Sep 2026',
                'ketersediaan_stok' => 'tersedia'
            ],
            [
                'id' => 10,
                'kategori_id' => 3,
                'nama' => 'Ferrero Rocher Premiun Chocolate Isi 3pcs',
                'harga' => 24000,
                'foto' => 'ACclViUtjbeNDwdhPlOZ.png',
                'detail' => 'Ferrero Rocher Premiun Chocolate adalah coklat hazelnut berkualitas tinggi ditambah crispy wafer yang nikmat mampu menciptakan cita rasa coklat yang istimewa, Berat produk 3pcs x 12,5gram, Exp Sep 2026',
                'ketersediaan_stok' => 'tersedia'
            ],
            [
                'id' => 11,
                'kategori_id' => 4,
                'nama' => 'Toblerone Milk Coklat',
                'harga' => 30000,
                'foto' => 'SwtcXWHrnjStSzVfRpKG.png',
                'detail' => 'Toblerone Coklat Milk adalah coklat batangan yang dibuat oleh Kraft Foods Switzerland. Dikenal dengan bentuknya yang segitiga, melambangkan matterhorn di pegunungan alpen, kandungan selain coklat adalah nougat, almond dan madu. Berat Produk 100gram, Exp Jan 2027',
                'ketersediaan_stok' => 'tersedia'
            ],
            [
                'id' => 12,
                'kategori_id' => 4,
                'nama' => 'Toblerone Happy Heart Days',
                'harga' => 33000,
                'foto' => 'iozHUyDLbnORGcmDDzzK.png',
                'detail' => 'Toblerone Happy Heart Days adalah coklat batangan yang dibuat oleh Kraft Foods Switzerland. Dikenal dengan bentuknya yang segitiga, melambangkan matterhorn di pegunungan alpen, kandungan selain coklat adalah nougat, stroberi dan madu. Berat Produk 100gram, Exp Juli 2026',
                'ketersediaan_stok' => 'tersedia'
            ],
            [
                'id' => 13,
                'kategori_id' => 4,
                'nama' => 'Toblerone Dark Coklat',
                'harga' => 30000,
                'foto' => 'xVCykZKLdhOyiBGLxgWT.png',
                'detail' => 'Toblerone Dark Coklat adalah coklat batangan yang dibuat oleh Kraft Foods Switzerland. Dikenal dengan bentuknya yang segitiga, melambangkan matterhorn di pegunungan alpen, kandungan selain dark coklat adalah nougat dan madu. Berat Produk 100gram, Exp Juni 2026',
                'ketersediaan_stok' => 'tersedia'
            ],
            [
                'id' => 14,
                'kategori_id' => 5,
                'nama' => 'KItKat Coklat Wafer 4 Finger',
                'harga' => 10000,
                'foto' => 'JvfdEQZrWeWxSXYgrtBB.png',
                'detail' => 'KItKat Coklat Wafer 4 Finger adalah perpauan antara coklat dan wafer yang renyah, Berat Produk 35gram, Exp Feb 2025',
                'ketersediaan_stok' => 'tersedia'
            ],
            [
                'id' => 15,
                'kategori_id' => 5,
                'nama' => 'KItKat White Coklat Wafer 4 Finger',
                'harga' => 13000,
                'foto' => 'EVNJJChAapzVOsJhPyEe.png',
                'detail' => 'KItKat White Coklat Wafer 4 Finger adalah perpaduan antara coklat putih dan wafer yang renyah, Berat Produk 36gram, Exp Mar 2025',
                'ketersediaan_stok' => 'tersedia'
            ],
            [
                'id' => 16,
                'kategori_id' => 5,
                'nama' => 'KItKat Caramel Coklat Bar',
                'harga' => 9000,
                'foto' => 'YZyfogAILcSETyHXDcoE.png',
                'detail' => 'KItKat Caramel Coklat Bar adalah perpauan antara coklat, caramel, dan wafer yang renyah dan legit, Berat Produk 29gram, Exp Jun 2025',
                'ketersediaan_stok' => 'tersedia'
            ],
        ]);
    }
}
