<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('amount');
            $table->string('currency');
            $table->string('purchase_number');
            $table->datetime('transaction_date');
            $table->string('operationType');
            $table->string('effectiveBrand');
            $table->string('card');
            $table->string('status');
            $table->json('detail');
            $table->integer('paid');
            $table->string('user_name');
            $table->string('user_lastname');
            $table->string('user_document');
            $table->string('user_telephone');
            $table->string('user_address');
            $table->string('user_email');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
