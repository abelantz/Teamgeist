<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchdayAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matchday_attendances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
            $table->unsignedInteger('player_id');
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
        Schema::dropIfExists('matchday_attendances');
    }
}
