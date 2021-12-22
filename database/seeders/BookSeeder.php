<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->delete();
        $books=array(
            array('id' => '1', 'user_id'=>'1', 'category_id'=>'1', 'book_name'=>"Mohd Salah History", 'book_desc'=>"This is a nice story about Mohd Saleh",'author'=>"Amer", 'image'=>"https://heroesfootball.com/wp-content/uploads/2019/05/salah.jpg","lang"=>"en"),
            array('id' => '2', 'user_id'=>'2', 'category_id'=>'2', 'book_name'=>"Best Goals of Mohd Salah", 'book_desc'=>"This book to describe the best goals of Mohd Salah",'author'=>"Amer", 'image'=>"https://heroesfootball.com/wp-content/uploads/2019/05/salah.jpg","lang"=>"ar"),
        );

        DB::table('books')->insert($books);    }
}
