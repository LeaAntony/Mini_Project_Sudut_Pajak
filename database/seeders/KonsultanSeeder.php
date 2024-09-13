<?php

namespace Database\Seeders;

use App\Models\Konsultan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KonsultanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Konsultan::factory(5)->create();
    }
}
