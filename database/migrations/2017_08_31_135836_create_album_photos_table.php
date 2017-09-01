<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('caption')->nullable(); // caption foto
            $table->string('filename'); // path ke foto (foto disimpan di folder "public/uploads/img")
            $table->integer('user_id')->unsigned(); // user id pengupload foto
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('album_id')->unsigned(); // user id pengupload foto
            $table->foreign('album_id')->references('id')->on('albums');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('album_photos');
    }
}
