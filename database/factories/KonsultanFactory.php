<?php

namespace Database\Factories;

use App\Models\Konsultan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Konsultan>
 */
class KonsultanFactory extends Factory
{
    protected $model = Konsultan::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_konsultan' => fake()->name(),
            'email_konsultan' => fake()->unique()->safeEmail(),
            'nomor_konsultan' => fake()->numerify(),
            'bio_konsultan' => fake()->word(),
            'foto_profil_konsultan' => fake()->word(),
            'alumnus_konsultan' => fake()->word(),
            'jenjang_karir_konsultan' => fake()->word(),
            'kategori_konsultan' => "PPh_badan",
            'status_konsultan' => "Aktif",
        ];
    }
}
