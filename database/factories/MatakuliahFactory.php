<?php

namespace Database\Factories;

use App\Models\Matakuliah;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Matakuliah>
 */
class MatakuliahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
        public function definition(): array
        {
            return [
                'mahasiswa_id' => \App\Models\Mahasiswa::factory(),
                'kode_mk' => fake()->bothify('MK-###'),
                'nama_mk' => fake()->randomElement(['Pemrograman Web', 'Basis Data', 'Algoritma', 'Jaringan Komputer']),
                'sks' => fake()->numberBetween(2, 4),
            ];
        }
        }
