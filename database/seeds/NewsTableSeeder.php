<?php

use App\News;
use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for($i=0; $i<50; $i++)
        {
            $news = new News;

            $news->translateOrNew('id')->title = $faker->sentence;
            $news->translateOrNew('id')->filename = $faker->image(public_path().'/storage/news_thumbs', 640, 480);
            $news->translateOrNew('id')->filename = str_replace(public_path().'/storage/', '', $news->translateOrNew('id')->filename);
            $news->translateOrNew('id')->content = $faker->paragraph(100);
            $news->save();
        }
    }
}
