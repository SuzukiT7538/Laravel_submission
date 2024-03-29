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
        $this->call(TagsTableSeeder::class);
        $this->call(ArticleTableSeeder::class);
        $this->call(CommentTableSeeder::class);
        $this->call(TagArticleTableSeeder::class);
    }
}
