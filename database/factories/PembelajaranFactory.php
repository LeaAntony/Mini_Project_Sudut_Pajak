<?php

namespace Database\Factories;

use App\Models\Pembelajaran;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pembelajaran>
 */
class PembelajaranFactory extends Factory
{
    protected $model = Pembelajaran::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul_pembelajaran' => fake()->word(),
            'tipe_pembelajaran' => 'Artikel',
            'gambar_pembelajaran' => fake()->word(),
            'isi_artikel_pembelajaran' => fake()->word(),
            'link_video_pembelajaran' => fake()->word(),
            'status_pembelajaran' => 'Aktif',
        ];
    }
}
