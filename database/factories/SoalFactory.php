<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Soal>
 */
class SoalFactory extends Factory
{
    protected $model = Soal::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pertanyaan_soal' => fake()->name(),
            'skor_soal' => fake()->numerify(),
            'tipe_soal' => 'Pilihan Ganda',
            'opsi_a_soal' => fake()->word(),
            'opsi_b_soal' => fake()->word(),
            'opsi_c_soal' => fake()->word(),
            'opsi_d_soal' => fake()->word(),
        ];
    }
}
