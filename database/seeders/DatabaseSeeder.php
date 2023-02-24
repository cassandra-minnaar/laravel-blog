<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Post::truncate();
        Category::truncate();


        $user = User::factory()->create();

        $txt =  Category::create([
            'name' => 'TXT',
            'slug' => 'txt'
        ]);

        $blackpink = Category::create([
            'name' => 'Blackpink',
            'slug' => 'blackpink'
        ]);

        $bts = Category::create([
            'name' => 'BTS',
            'slug' => 'bts'
        ]);

        Post::create([
            'user_id' => $user->id ,
            'category_id' => $txt->id ,
            'title' => 'Introduction to TXT',
            'slug' => 'introduction-to-txt',
            'excerpt' => '<p>Excerpt for txt intro</p>',
            'body' => '<p>Body for txt with lyrics from BLUE HOUR! But its you! your the one that i want, you everything that i want BLUE</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $blackpink->id, 
            'title' => 'Introduction to Blackpink',
            'slug' => 'introduction-to-blackpink', 
            'excerpt' => '<p>Excerpt for blackpink introduction</p>',
            'body' => '<p>Blackpink lyrics: I am the typa girl that make you forget that you got a type; Type that make you love me when the only thing you done is like I am that typa girl, I am that typa girl.</p>',
        ]);
        
    }
}
