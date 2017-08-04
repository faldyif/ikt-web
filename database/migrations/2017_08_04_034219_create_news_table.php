<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id'); // id berita
            $table->string('title'); // judul berita
            $table->integer('user_id')->unsigned(); // user id pembuat berita
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('photo_id')->unsigned(); // untuk thumbnail foto
            $table->foreign('photo_id')->references('id')->on('photos');
            $table->text('content'); // isi berita
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
        Schema::dropIfExists('news');
    }
}
