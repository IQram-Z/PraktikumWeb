<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Membuat 20 mahasiswa, dan setiap mahasiswa dibuatkan 2 matakuliah (total 40 matakuliah)
        Mahasiswa::factory(20)->create()->each(function ($mahasiswa) {
            Matakuliah::factory(2)->create([
                'mahasiswa_id' => $mahasiswa->id,
            ]);
        });
    }
}