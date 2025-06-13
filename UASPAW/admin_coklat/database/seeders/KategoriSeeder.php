<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategori')->insert([
            ['id' => 1, 'nama' => 'Silver queen'],
            ['id' => 2, 'nama' => 'Dairy Milk'],
            ['id' => 3, 'nama' => 'Ferrero Rocher'],
            ['id' => 4, 'nama' => 'toblerone'],
            ['id' => 5, 'nama' => 'KitKat'],
        ]);
    }
}
