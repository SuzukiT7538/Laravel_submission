<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'body' => 'With supporting text below as a natural lead-in to additional content.',
            'author' => 'Miyamoto Musashi',
            'article_id' => 1,
                    ];
        DB::table('comments')->insert($param);

        $param = [
            'body' => 'これは二つ目のコメントです',
            'author' => 'Miyamoto Musashi',
            'article_id' => 1,
                    ];
        DB::table('comments')->insert($param);

        $param = [
            'body' => 'これは3つ目のコメントです',
            'author' => 'Miyamoto Musashi',
            'article_id' => 2,
                    ];
        DB::table('comments')->insert($param);
    }
}
