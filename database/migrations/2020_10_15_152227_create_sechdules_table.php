<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSechdulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sechdules', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('meet_url');
            $table->text('description');
            $table->enum('location', ['Meeting Room', 'Kitchen'])->defautl("Meeting Room");
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->dateTime('date');
            $table->string('from_time');
            $table->string('to_time');
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
        Schema::dropIfExists('sechdules');
    }
}
