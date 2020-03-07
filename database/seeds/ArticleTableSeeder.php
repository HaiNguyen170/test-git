<?php

use Illuminate\Database\Seeder;
use  App\Article;
use Illuminate\Database\Eloquent\Model;

class ArticleTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 10; ++$i) {
            Article::create([
                'title' => $faker->sentence,
                'content' => implode('', $faker->sentences(4))
            ]);
        }
    }
}
