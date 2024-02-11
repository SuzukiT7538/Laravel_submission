<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'slug' => 'How to build webapps that scale',
            'title' => 'How to build webapps that scale',
            'description' => 'This is the description for the post.',
            'body' => 'Introducing RealWorld.',
            'fav' => 29,
            'author' => 'Eric Simons',
        ];
        DB::table('articles')->insert($param);
        $param = [
            'slug' => 'How to build webapps that scale',
            'title' => 'How to build webapps that scale',
            'description' => 'This is the description for the post.',
            'body' => 'Introducing RealWorld.',
            'fav' => 29,
            'author' => 'Eric Simons',
        ];
        DB::table('articles')->insert($param);
        $param = [
            'slug' => 'How to build webapps that scale',
            'title' => 'How to build webapps that scale',
            'description' => 'This is the description for the post.',
            'body' => 'Introducing RealWorld.',
            'fav' => 29,
            'author' => 'Eric Simons',
        ];
        DB::table('articles')->insert($param);
        $param = [
            'slug' => 'How to build webapps that scale',
            'title' => 'How to build webapps that scale',
            'description' => 'This is the description for the post.',
            'body' => 'Introducing RealWorld.',
            'fav' => 29,
            'author' => 'Eric Simons',
        ];
        DB::table('articles')->insert($param);
        $param = [
            'slug' => 'How to build webapps that scale',
            'title' => 'How to build webapps that scale',
            'description' => 'This is the description for the post.',
            'body' => 'Introducing RealWorld.',
            'fav' => 29,
            'author' => 'Eric Simons',
        ];
        DB::table('articles')->insert($param);
    }
}
