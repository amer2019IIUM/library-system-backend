<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        $categories = array(
            array('id' => '1', 'category_name' => 'history', 'lang' => 'en'),
            array('id' => '2', 'category_name' => 'sport', 'lang' => 'ar'),
        );

        DB::table('categories')->insert($categories);
    }
}
