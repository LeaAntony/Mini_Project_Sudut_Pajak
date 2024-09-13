<?php

namespace Database\Seeders;

use App\Models\PeraturanPajak;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeraturanPajakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PeraturanPajak::factory(5)->create();
    }
}
