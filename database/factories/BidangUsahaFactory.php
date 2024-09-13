<?php

namespace Database\Factories;

use App\Models\BidangUsaha;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BidangUsaha>
 */
class BidangUsahaFactory extends Factory
{
    protected $model = BidangUsaha::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "judul_bidang_usaha" => fake()->word(),
            "deskripsi_bidang_usaha" => fake()->word(),
            "gambar_bidang_usaha" => fake()->word(),
            "status_bidang_usaha" => "Aktif",
        ];
    }
}
