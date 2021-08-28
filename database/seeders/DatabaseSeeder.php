<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Azhe-kun',
            'username' => 'azhe403',
            'email' => 'admin@azhe.space',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'password' => bcrypt('123456')
        ]);

        User::create([
            'name' => 'Fulan',
            'username' => 'fulan123',
            'email' => 'fulan@azhe.space',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'password' => bcrypt('123456')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(50)->create();
    }
}
