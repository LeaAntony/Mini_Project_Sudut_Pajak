<?php

namespace Database\Factories;

use App\Models\Berita;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Berita>
 */
class BeritaFactory extends Factory
{
    protected $model = Berita::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "judul_berita" => fake()->word(),
            "deskripsi_berita" => fake()->word(),
            "gambar_berita" => fake()->word(),
            "kategori_berita" => "Artikel",
            "status_berita" => "Aktif",
        ];
    }
}
