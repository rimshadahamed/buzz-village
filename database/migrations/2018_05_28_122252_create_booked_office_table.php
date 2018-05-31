<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookedOfficeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booked_office', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('requested_office_id');
            $table->string('office_no');
            $table->string('office_size');
            $table->string('space');
            $table->string('assigned_to');
            $table->string('tenancy_contract');
            $table->string('floor_plan');
            $table->string('tenancy_end_date');
            $table->string('licence_end_date');
            $table->string('comments');
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
        Schema::dropIfExists('booked_office');
    }
}
