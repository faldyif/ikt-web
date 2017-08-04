<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBerthingPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berthing_plans', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type', ['International', 'Domestic']); // berthing type
            $table->dateTime('eta'); // estimated time of arrival
            $table->string('vessel'); // vessel
            $table->string('agent'); // shipping line/agent
            $table->string('voy'); // VOY
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
        Schema::dropIfExists('berthing_plans');
    }
}
