<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Catalin Dima",
            'email' => "dimacatalin90@yahoo.com",
            'password' => Hash::make("akpiftel1"),
            'rol' => 1,
            ]);
        
        DB::table('users')->insert([
            'name' => "Madalin Danesq",
            'email' => "danesq@yahoo.com",
            'password' => Hash::make("akpiftel1"),
            'rol' => 0,
            ]);
    }
}
