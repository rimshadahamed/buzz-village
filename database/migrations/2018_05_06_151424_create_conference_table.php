<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConferenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conference', function (Blueprint $table) {
            $table->increments('req_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('date');
            $table->string('time');
            $table->string('conf_size');
            $table->string('arrangements');
            $table->string('status');
            $table->string('booked_room');
            $table->string('comments')->nullable();
            $table->string('user');
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
        Schema::dropIfExists('conference');
    }
}
