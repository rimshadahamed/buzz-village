<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParkingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parking', function (Blueprint $table) {
            $table->increments('parking_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email_address');
            $table->string('plan');
            $table->string('comments')->nullable();
            $table->string('block');
            $table->string('floor');
            $table->string('parking_valid_till');
            $table->string('status');
            $table->string('car_wash');
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
        Schema::dropIfExists('parking');
    }
}
