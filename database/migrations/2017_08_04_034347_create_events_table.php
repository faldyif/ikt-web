<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject'); // subjek event
            $table->text('event'); // deskripsi event
            $table->string('place'); // lokasi event
            $table->dateTime('event_date_time'); // waktu event
            $table->string('thumbnail_path'); // untuk thumbnail foto -> folder event_thumbs
            $table->integer('user_id')->unsigned(); // user id pembuat event
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('events');
    }
}
