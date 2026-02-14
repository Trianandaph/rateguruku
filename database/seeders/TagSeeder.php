<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            ['name' => 'Jokes Receh', 'emoji' => '😂'],
            ['name' => 'Killer', 'emoji' => '💀'],
            ['name' => 'Baik Hati', 'emoji' => '😇'],
            ['name' => 'Sering Telat', 'emoji' => '⏰'],
            ['name' => 'Tugas Banyak', 'emoji' => '📚'],
            ['name' => 'Open Book = Open Heart', 'emoji' => '📖'],
            ['name' => 'Santai tapi Tegas', 'emoji' => '😎'],
            ['name' => 'Penjelasan Jelas', 'emoji' => '💡'],
            ['name' => 'Sabar Banget', 'emoji' => '🙏'],
            ['name' => 'Seru Abis', 'emoji' => '🎉'],
        ];

        foreach ($tags as $tag) {
            Tag::create($tag);
        }
    }
}
