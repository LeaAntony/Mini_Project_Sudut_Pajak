<?php

namespace Database\Factories;

use App\Models\PeraturanPajak;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PeraturanPajak>
 */
class PeraturanPajakFactory extends Factory
{
    protected $model = PeraturanPajak::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul_peraturan_pajak' => fake()->word(),
            'deskripsi_peraturan_pajak' => fake()->word(),
            'file_peraturan_pajak' => fake()->word(),
            'kategori_peraturan_pajak' => 'Pusat',
            'status_peraturan_pajak' => 'Aktif',
        ];
    }
}
