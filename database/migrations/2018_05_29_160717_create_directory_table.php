<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directory', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->string('industry');
            $table->string('description');
            $table->string('image');
            $table->string('website');
            $table->string('email');
            $table->string('hr_email');
            $table->string('contact_number');
            $table->string('linkedin');
            $table->string('office_no');
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
        Schema::dropIfExists('directory');
    }
}
