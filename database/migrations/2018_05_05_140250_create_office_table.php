<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Office', function (Blueprint $table) {
            $table->increments('office_no');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email_address');
            $table->string('space_required');
            $table->string('purpose');
            $table->string('comments');
            $table->string('trade_license_validity');
            $table->string('tenecy_end_date');
            $table->string('image');
            $table->string('status');
            $table->string('block');
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
        Schema::dropIfExists('office');
    }
}
