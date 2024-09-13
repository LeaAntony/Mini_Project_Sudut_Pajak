<?php

namespace Database\Factories;

use App\Models\Kuis;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kuis>
 */
class KuisFactory extends Factory
{
    protected $model = Kuis::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul_kuis' => fake()->name(),
            'waktu_kuis' => fake()->numerify(),
            'jumlah_soal_kuis' => fake()->numerify(),
            'status_kuis' => 'Aktif',
        ];
    }
}
