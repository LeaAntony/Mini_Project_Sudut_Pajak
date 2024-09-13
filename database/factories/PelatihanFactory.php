<?php

namespace Database\Factories;

use App\Models\Pelatihan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pelatihan>
 */
class PelatihanFactory extends Factory
{
    protected $model = Pelatihan::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul_pelatihan' => fake()->word(),
            'deskripsi_pelatihan' => fake()->word(),
            'gambar_pelatihan' => fake()->word(),
            'pdf_pelatihan' => fake()->word(),
            'ppt_pelatihan' => fake()->word(),
            'link_pelatihan' => fake()->word(),
            'status_pelatihan' => 'Aktif',
        ];
    }
}
