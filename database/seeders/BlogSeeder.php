<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            Blog::create([
                'title' => "Sample Blog Post $i",
                'slug' => Str::slug("Sample Blog Post $i"),
                'category' => 'Finance',
                'description' => 'This is a short description for blog post '.$i,
                'content' => 'This is the full content of blog post '.$i.'. Here you can write long text.',
                'image' => 'assets/images/frontend/slider/1.webp', 
                'author' => 'Admin',
                'published_at' => now()->subDays(rand(1, 30)),
            ]);
        }
    
    }
}
