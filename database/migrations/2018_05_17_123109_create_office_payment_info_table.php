<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficePaymentInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('office_payment_info', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('requested_id');
            $table->integer('user_id');
            $table->string('receipt_no');
            $table->string('cheque_no');
            $table->string('bank_name');
            $table->string('assigned_email');
            $table->string('payment_date');
            $table->string('amount');
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
        Schema::dropIfExists('office_payment_info');
    }
}
