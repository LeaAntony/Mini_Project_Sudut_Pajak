<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'usertype' => 'admin',
            'password' => Hash::make('admin123'),
        ]);

        $this->call([
            BeritaSeeder::class,
            BidangUsahaSeeder::class,
            KonsultanSeeder::class,
            KuisSeeder::class,
            PelatihanSeeder::class,
            PembelajaranSeeder::class,
            PeraturanPajakSeeder::class,
            SoalSeeder::class,
        ]);
    }
}
