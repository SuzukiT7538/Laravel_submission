<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'name' => 'est',
        ];
        DB::table('tags')->insert($param);

        $param = [
            'name' => 'enim',
        ];
        DB::table('tags')->insert($param);

        $param = [
            'name' => 'repellat',
        ];
        DB::table('tags')->insert($param);

        $param = [
            'name' => 'ipsum',
        ];
        DB::table('tags')->insert($param);

        $param = [
            'name' => 'exercitationem',
        ];
        DB::table('tags')->insert($param);

        $param = [
            'name' => 'eos',
        ];
        DB::table('tags')->insert($param);

        $param = [
            'name' => 'facilis',
        ];
        DB::table('tags')->insert($param);

        $param = [
            'name' => 'tenetur',
        ];
        DB::table('tags')->insert($param);

        $param = [
            'name' => 'consequatur',
        ];
        DB::table('tags')->insert($param);

        $param = [
            'name' => 'quia',
        ];
        DB::table('tags')->insert($param);
    }
}
