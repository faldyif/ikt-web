<?php

use App\Album;
use App\AlbumPhoto;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for($i=0; $i<10; $i++)
        {
            $album = Album::create([
                'title' => $faker->sentence,
                'user_id' => 1,
                'description' => $faker->paragraph()
            ]);
            for ($j=0; $j<20; $j++) {
                $filename = $faker->image(public_path().'/storage/album_photos', 640, 480);
                $filename = str_replace(public_path().'/storage/', '', $filename);
                AlbumPhoto::create([
                    'album_id' => $album->id,
                    'user_id' => 1,
                    'filename' => $filename
                ]);
            }
        }
    }
}
