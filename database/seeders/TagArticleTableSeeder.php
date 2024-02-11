<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'article_id' => 1,
            'tag_id' => 1,
        ];
        DB::table('tag_article')->insert($param);
        $param = [
            'article_id' => 1,
            'tag_id' => 2,
        ];
        DB::table('tag_article')->insert($param);
        $param = [
            'article_id' => 2,
            'tag_id' => 1,
        ];
        DB::table('tag_article')->insert($param);
        $param = [
            'article_id' => 2,
            'tag_id' => 2,
        ];
        DB::table('tag_article')->insert($param);
        $param = [
            'article_id' => 2,
            'tag_id' => 3,
        ];
        DB::table('tag_article')->insert($param);

    }
}
