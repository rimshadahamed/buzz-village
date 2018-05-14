<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('admin_events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('event_name');
            $table->string('description');
            $table->string('email_address');
            $table->string('website');
            $table->string('social');
            $table->string('contact_number');
            $table->string('purpose');
            $table->string('event_date');
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
        Schema::dropIfExists('admin_events');
    }
}
