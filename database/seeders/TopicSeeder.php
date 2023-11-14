<?php

namespace Database\Seeders;

use App\Models\Topics;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Topics::create([
            'id' => 1,
            'desc' => ''
        ]);

        Topics::create([
            'desc' => 'Kebersihan'
        ]);

        Topics::create([
            'desc' => 'Fasilitas'
        ]);

        Topics::create([
            'desc' => 'Kenyamanan'
        ]);

        Topics::create([
            'desc' => 'Gangguan diri'
        ]);
    }
}
