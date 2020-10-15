<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->date('s_date');
            $table->time('s_from_time');
            $table->time('s_to_time');
            $table->text('s_guest');
            $table->enum('s_location', ['meeting_room','mng_room','library','kitchen','balcony','at_place']);
            $table->string('s_meeting_link');
            $table->string('created_user');
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
        Schema::dropIfExists('schedules');
    }
}
