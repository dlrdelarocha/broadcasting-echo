<?php

use \Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        $users = \App\User::pluck('id');

        foreach ($users as $userId) {
            factory(\App\Post::class)->times(rand(5, 10))->create([
               'user_id' => $userId
            ]);
        }
    }
}
