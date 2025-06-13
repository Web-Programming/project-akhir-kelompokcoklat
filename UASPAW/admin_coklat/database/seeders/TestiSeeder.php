<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
                DB::table('testi')->insert([
            [
                'id' => 4,
                'name' => 'Putri Aulia',
                'phone' => '(+62) 812 7473 9797',
                'email' => 'putri.aulia@gmail.com',
                'message' => 'Coklatnya luar biasa! Tidak hanya enak, tapi juga memberikan pengalaman yang tak terlupakan. Setiap potongan adalah kebahagiaan.',
                'created_at' => '2024-10-16 14:57:39'
            ],
            [
                'id' => 8,
                'name' => 'berlian',
                'phone' => '(+62) 812 7473 9797',
                'email' => 'berlian.wanna@gmail.com',
                'message' => 'Coklat dari ChocoLux benar-benar memanjakan lidah! Rasanya yang kaya dan lembut membuat setiap gigitan menjadi momen istimewa.',
                'created_at' => '2024-10-16 15:02:23'
            ],
            [
                'id' => 9,
                'name' => 'Annisa',
                'phone' => '(+62) 812 7473 9797',
                'email' => 'Annisa@gmail.com',
                'message' => 'Coklatnya luar biasa! Tidak hanya enak, tapi juga memberikan pengalaman yang tak terlupakan. Setiap potongan adalah kebahagiaan.',
                'created_at' => '2024-10-16 15:07:43'
            ],
            [
                'id' => 11,
                'name' => 'berlian',
                'phone' => '(+62) 812 7473 9797',
                'email' => 'berlian.wanna@gmail.com',
                'message' => 'Coklatnya luar biasa! Tidak hanya enak, tapi juga memberikan pengalaman yang tak terlupakan. Setiap potongan adalah kebahagiaan.',
                'created_at' => '2024-10-17 04:13:19'
            ],
            [
                'id' => 12,
                'name' => 'berlian wanna',
                'phone' => '08127365789',
                'email' => 'berlian.wanna@gmail.com',
                'message' => 'coklat nya enak sekali, datang nya cepat & masih padat tidak cair',
                'created_at' => '2024-11-27 16:18:24'
            ],
            [
                'id' => 13,
                'name' => 'berlian wanna',
                'phone' => '08127365789',
                'email' => 'berlian.wanna@gmail.com',
                'message' => 'coklat nya enak sekali, datang nya cepat & masih padat tidak cair',
                'created_at' => '2024-12-04 01:59:00'
            ],
        ]);
    }
}
