<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);

        
        \App\Models\User::factory(10)->create();

        \App\Models\Post::factory(100)->create();

        \App\Models\Category::factory(10)->create();

        
        \App\Models\Country::factory(10)->create();

        \App\Models\State::factory(100)->create();

        \App\Models\City::factory(500)->create();


        \App\Models\Image::factory(500)->create();


        \App\Models\Tag::factory(10)->create();


        \App\Models\Video::factory(50)->create();

        
        $this->call(PostVideoSeeder::class);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
