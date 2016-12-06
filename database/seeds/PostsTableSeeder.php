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
        //
        $posts = [
        	['title'=>'Tips Cepat Lari','Content'=>'lorem ipsum'],
        	['title'=>'Haruskah Cepat Berlari?','content'=>'lorem_ipsum'],
        	['title'=>'Membangung Nutrisi TUbuh','content'=>'lorem_ipsum']
        ];

        // masukan data ke database
        DB::table('posts')->insert($posts);
    }
}
