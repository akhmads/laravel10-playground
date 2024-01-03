<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('q1w2e3r4'),
        ]);
        User::create([
            'name' => 'Author',
            'email' => 'author@gmail.com',
            'password' => Hash::make('q1w2e3r4'),
        ]);
        User::create([
            'name' => 'Carolus Subroto',
            'email' => 'carolus112@gmail.com',
            'password' => Hash::make('q1w2e3r4'),
        ]);
        User::create([
            'name' => 'Teddo Tandiyono',
            'email' => 'teddo.tandiyono@gmail.com',
            'password' => Hash::make('q1w2e3r4'),
        ]);
        User::create([
            'name' => 'Munajat Wisnugroho',
            'email' => 'munajat.wisnugroho@gmail.com',
            'password' => Hash::make('q1w2e3r4'),
        ]);
    }
}
