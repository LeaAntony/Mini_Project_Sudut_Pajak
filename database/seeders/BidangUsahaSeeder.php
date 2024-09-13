<?php

namespace Database\Seeders;

use App\Models\BidangUsaha;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BidangUsahaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BidangUsaha::factory(5)->create();
    }
}
