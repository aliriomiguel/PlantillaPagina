<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\About;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(Post::class, 60)->create();
        factory(About::class, 70)->create();
    }
}
