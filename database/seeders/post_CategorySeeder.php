<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class post_CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_category')->insert([
            'post_id'=> '1',
            'category_id' => '2'
        ]);
        DB::table('post_category')->insert([
            'post_id'=> '2',
            'category_id' => '1'
        ]);
        DB::table('post_category')->insert([
            'post_id'=> '3',
            'category_id' => '2'
        ]);
        DB::table('post_category')->insert([
            'post_id'=> '4',
            'category_id' => '1'
        ]);
        DB::table('post_category')->insert([
            'post_id'=> '5',
            'category_id' => '2'
        ]);
        DB::table('post_category')->insert([
            'post_id'=> '6',
            'category_id' => '1'
        ]);

        DB::table('post_category')->insert([
            'post_id'=> '7',
            'category_id' => '2'
        ]);
        DB::table('post_category')->insert([
            'post_id'=> '8',
            'category_id' => '1'
        ]);
        DB::table('post_category')->insert([
            'post_id'=> '9',
            'category_id' => '2'
        ]);
        DB::table('post_category')->insert([
            'post_id'=> '10',
            'category_id' => '1'
        ]);
        DB::table('post_category')->insert([
            'post_id'=> '11',
            'category_id' => '2'
        ]);
        DB::table('post_category')->insert([
            'post_id'=> '12',
            'category_id' => '1'
        ]);
        DB::table('post_category')->insert([
            'post_id'=> '13',
            'category_id' => '4'
        ]);

        DB::table('post_category')->insert([
            'post_id'=> '14',
            'category_id' => '2'
        ]);
        DB::table('post_category')->insert([
            'post_id'=> '15',
            'category_id' => '1'
        ]);
        DB::table('post_category')->insert([
            'post_id'=> '16',
            'category_id' => '2'
        ]);
        DB::table('post_category')->insert([
            'post_id'=> '17',
            'category_id' => '1'
        ]);
        DB::table('post_category')->insert([
            'post_id'=> '18',
            'category_id' => '2'
        ]);
        DB::table('post_category')->insert([
            'post_id'=> '19',
            'category_id' => '1'
        ]);
        DB::table('post_category')->insert([
            'post_id'=> '20',
            'category_id' => '2'
        ]);
        DB::table('post_category')->insert([
            'post_id'=> '21',
            'category_id' => '1'
        ]);
        DB::table('post_category')->insert([
            'post_id'=> '22',
            'category_id' => '2'
        ]);
        DB::table('post_category')->insert([
            'post_id'=> '23',
            'category_id' => '1'
        ]);
        DB::table('post_category')->insert([
            'post_id'=> '24',
            'category_id' => '2'
        ]);
        DB::table('post_category')->insert([
            'post_id'=> '25',
            'category_id' => '1'
        ]);
    }
}
