<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
                DB::table('register')->insert([
            [
                'id' => 1,
                'full_name' => 'berlian',
                'email' => 'admin@gmail.com',
                'password' => '$2y$10$gol4SVNT.OFK8EgRaPbHHO57GeYzO.bMMXiqYMjR8bvSwVYxwgy.q'
            ],
            [
                'id' => 3,
                'full_name' => 'putri',
                'email' => 'putri@gmail.com',
                'password' => '$2y$10$H1hXQNjd76fXLEE4tKldQuWl1n14sWsxpF6bOjlQUzPBTiN/QOvLO'
            ],
            [
                'id' => 4,
                'full_name' => 'berlian',
                'email' => 'berlian@gmail.com',
                'password' => '$2y$10$G4onjqtEWbm/Z2jdZnF1q.6wnUXt3KRLdc2Q6K7CdSz5HGyMFDTsq'
            ],
            [
                'id' => 5,
                'full_name' => 'berlian',
                'email' => 'berlian.wanna@gmail.com',
                'password' => '$2y$10$OVxmq3q/mjzVJsOSiaevIO1..H/0eVQL/U8nH.8DMJwaHS7EBLTIG'
            ],
        ]);
    }
}
