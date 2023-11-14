<?php

namespace Database\Seeders;

use App\Models\Reactions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reactions::create([
            'id' => 1,
            'desc' => 'Kecewa'
        ]);

        Reactions::create([
            'id' => 2,
            'desc' => 'Sedih'
        ]);

        Reactions::create([
            'id' => 3,
            'desc' => 'Biasa saja'
        ]);

        Reactions::create([
            'id' => 4,
            'desc' => 'Senang'
        ]);

        Reactions::create([
            'id' => 5,
            'desc' => 'Sangat senang'
        ]);
    }
}
