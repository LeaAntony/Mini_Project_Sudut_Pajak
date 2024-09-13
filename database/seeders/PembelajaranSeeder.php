<?php

namespace Database\Seeders;

use App\Models\Pembelajaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PembelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pembelajaran::factory(5)->create();
    }
}
