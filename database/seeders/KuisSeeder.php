<?php

namespace Database\Seeders;

use App\Models\Kuis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KuisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kuis::factory(5)->create();
    }
}
