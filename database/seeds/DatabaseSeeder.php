<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Category;
use App\Question;
use App\Like;
use App\Reply;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)->create();
        factory(Category::class, 5)->create();
        factory(Question::class, 15)->create();
        factory(Reply::class, 50)->create()->each(function ($reply) {
            $reply->likes()->save(factory(Like::class)->make());
        });
        // $this->call(UsersTableSeeder::class);
    }
}
