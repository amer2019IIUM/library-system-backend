<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $users = array(
            array('id' => '1', 'username' => 'amer1', 'email' => 'technical@gmail.com', 'email_verified_at' => null, 'password' => "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi", 'address' => "IIUM", 'lat' => "ii", 'lng' => "lg", "is_admin" => null, 'isblocked' => 0),
            array('id' => '2', 'username' => 'amer2', 'email' => 'te@gmail.com', 'email_verified_at' => null, 'password' => "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi", 'address' => "IIUM", 'lat' => "ii", 'lng' => "lg", "is_admin" => null, 'isblocked' => 0),
            array('id' => '3', 'username' => 'admin', 'email' => 'admin@gmail.com', 'email_verified_at' => null, 'password' => "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi", 'address' => "IIUM", 'lat' => "ii", 'lng' => "lg", "is_admin" => 1, 'isblocked' => 0),
        );

        DB::table('users')->insert($users);
    }
}
