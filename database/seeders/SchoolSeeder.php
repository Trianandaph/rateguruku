<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $schools = [
            [
                'name' => 'SMA Negeri 1 Jakarta',
                'address' => 'Jl. Budi Utomo No.7',
                'city' => 'Jakarta Pusat',
                'province' => 'DKI Jakarta',
                'logo_url' => null,
            ],
            [
                'name' => 'SMA Negeri 3 Bandung',
                'address' => 'Jl. Belitung No.8',
                'city' => 'Bandung',
                'province' => 'Jawa Barat',
                'logo_url' => null,
            ],
            [
                'name' => 'SMA Negeri 5 Surabaya',
                'address' => 'Jl. Kusuma Bangsa No.21',
                'city' => 'Surabaya',
                'province' => 'Jawa Timur',
                'logo_url' => null,
            ],
            [
                'name' => 'SMA Negeri 2 Yogyakarta',
                'address' => 'Jl. Bener No.11',
                'city' => 'Yogyakarta',
                'province' => 'DI Yogyakarta',
                'logo_url' => null,
            ],
            [
                'name' => 'SMA Negeri 1 Medan',
                'address' => 'Jl. Imam Bonjol No.2',
                'city' => 'Medan',
                'province' => 'Sumatera Utara',
                'logo_url' => null,
            ],
        ];

        foreach ($schools as $school) {
            School::create($school);
        }
    }
}
