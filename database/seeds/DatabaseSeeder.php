<?php

use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $faker = FakerFactory::create();

        for ($i=0; $i < 10; $i++) { 
            $post = new App\Post();
            $post->title = $faker->sentence;
            $post->body = $faker->paragraph;
            $post->category_id = rand(1, 5);
            $post->save();
        }

    }
}
