<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => "Beginer jungle guide",
            'body' => "Jungle Starter Guide Guide Description: In this starter guide for jungle, you'll learn the beginner's tips to starting jungle for the first time. It's also a great refresher for those who have picked up jungle recently as well. Enjoy!",
            'cover_image' => "2021-05-20 16_31_13-(107) virkayu - YouTube_1621517561.png",
            'video' => "https://www.youtube.com/embed/DGgbJTJFAc0",
            'user_id' => 1,
            ]);
    }
}
