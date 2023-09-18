<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facade\DB;
use App\Models\Tag;
class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('tags')->insert([
        //     [
        //         'name' => 'php', 
        //         'slug' => 'php',
        //         'created_at' => now(), 
        //         'updated_at' => now(), 
        //         ], 
        //         [
        //         'name' => 'laravel', 
        //         'slug' => 'laravel',
        //         'created_at' => now(), 
        //         'updated_at' => now(), 
        //         ], 
        //         [
        //         'name' => 'livewire', 
        //         'slug' => 'livewire',
        //         'created_at' => now(), 
        //         'updated_at' => now(), 
        //         ]
        //     ]);
        $tags = [
            [
                'name' => 'php', 
                'slug' => 'php',
                'created_at' => now(), 
                'updated_at' => now(), 
                ], 
                [
                'name' => 'laravel', 
                'slug' => 'laravel',
                'created_at' => now(), 
                'updated_at' => now(), 
                ], 
                [
                'name' => 'livewire', 
                'slug' => 'livewire',
                'created_at' => now(), 
                'updated_at' => now(), 
            ]
        ];
        Tag::insert($tags);
    }
}
