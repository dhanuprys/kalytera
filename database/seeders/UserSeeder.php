<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Kalytera Admin',
            'role' => 1,
            'email' => 'kalytera@example.com',
            'username' => 'kalytera',
            'password' => 'kalytera'
        ]);
    }
}
