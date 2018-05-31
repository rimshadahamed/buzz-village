<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facility', function (Blueprint $table) {
            $table->increments('case_ID');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email_address');
            $table->string('office_no');
            $table->string('block');
            $table->string('issue_type');
            $table->string('issue_description');
            $table->string('image');
            $table->string('status');
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
        Schema::dropIfExists('facility');
    }
}
