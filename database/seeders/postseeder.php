<?php

namespace Database\Seeders;
use Database\Factories\PostFactory;
use \App\Models\Post;
use Illuminate\Database\Seeder;

class postseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Post::factory(10)->create();
    }
}
