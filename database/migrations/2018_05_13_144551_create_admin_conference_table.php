<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminConferenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_conference', function (Blueprint $table) {
            $table->increments('id');
            $table->string('room_no');
            $table->string('room_size');
            $table->string('arrangements');
            $table->string('includes');
            $table->string('image_360');
            $table->string('image');
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
        Schema::dropIfExists('admin_conference');
    }
}
