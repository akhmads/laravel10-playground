<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tags')->insert([
            'tag' => 'Laravel',
            'slug' => 'laravel',
        ]);
        DB::table('tags')->insert([
            'tag' => 'Livewire',
            'slug' => 'livewire',
        ]);
        DB::table('tags')->insert([
            'tag' => 'Alpine JS',
            'slug' => 'alpine-js',
        ]);
        DB::table('tags')->insert([
            'tag' => 'Tailwind',
            'slug' => 'tailwind',
        ]);
        DB::table('tags')->insert([
            'tag' => 'Bootstrap',
            'slug' => 'bootstrap',
        ]);
        DB::table('tags')->insert([
            'tag' => 'Codeigniter',
            'slug' => 'codeigniter',
        ]);
        DB::table('tags')->insert([
            'tag' => 'React',
            'slug' => 'react',
        ]);
        DB::table('tags')->insert([
            'tag' => 'Vue',
            'slug' => 'vue',
        ]);
        DB::table('tags')->insert([
            'tag' => 'Svelte',
            'slug' => 'svelte',
        ]);
        DB::table('tags')->insert([
            'tag' => 'HTML',
            'slug' => 'html',
        ]);
        DB::table('tags')->insert([
            'tag' => 'CSS',
            'slug' => 'css',
        ]);
        DB::table('tags')->insert([
            'tag' => 'Javascript',
            'slug' => 'javascript',
        ]);
        DB::table('tags')->insert([
            'tag' => 'Node Js',
            'slug' => 'node-js',
        ]);
    }
}
