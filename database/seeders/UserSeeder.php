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
        User::create([
            'name' => 'User 1',
            'email' => 'user1@server.com',
            'password' => Hash::make('12345'),
            'created_at' => '2023-01-01 12:01:00',
        ]);
        User::create([
            'name' => 'User 2',
            'email' => 'user2@server.com',
            'password' => Hash::make('12345'),
            'created_at' => '2023-02-05 03:45:01',
        ]);
        User::create([
            'name' => 'User 3',
            'email' => 'user3@server.com',
            'password' => Hash::make('12345'),
            'created_at' => '2023-02-05 15:32:11',
        ]);
        User::create([
            'name' => 'User 4',
            'email' => 'user4@server.com',
            'password' => Hash::make('12345'),
            'created_at' => '2023-02-06 21:01:55',
        ]);
    }
}
