<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchdayEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matchday_events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
            $table->time('time');
            $table->unsignedInteger('half');
            $table->unsignedInteger('player_id');
            $table->unsignedInteger('second_player_id')->nullable();
            $table->unsignedInteger('matchday_id');
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
        Schema::dropIfExists('matchday_events');
    }
}
