<?php

use Illuminate\Database\Seeder;

class postsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
        ['title'=>'Tips Cepat Nikah','content'=>'lorem ipsum'],
        ['title'=>'Harus Memnunda Nikah','content'=>'lorem ipsum'],
        ['title'=>'Membangun Visi Misi keluarga','content'=>'lorem ipsum']
        ];
        // memasukan data ke table 'posts' di database
        DB::table('posts')->insert($posts);
    }
} 
