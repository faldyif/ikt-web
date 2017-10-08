<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title'); // judul album
            $table->string('title_en')->nullable(); // judul album english
            $table->string('title_jp')->nullable(); // judul album japan
            $table->string('slug'); // slug album (untuk url)
            $table->integer('user_id')->unsigned(); // user id pembuat album
            $table->foreign('user_id')->references('id')->on('users');
            $table->text('description')->nullable(); // deskripsi album
            $table->text('description_en')->nullable(); // deskripsi album english
            $table->text('description_jp')->nullable(); // deskripsi album japan
            $table->integer('view_count')->default(0); // jumlah page view
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
        Schema::dropIfExists('albums');
    }
}
