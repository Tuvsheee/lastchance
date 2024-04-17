<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreatePaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('payments', function (Blueprint $table) {
        $table->id();
        $table->string('firstname')->nullable();
        $table->string('email')->nullable();
        $table->string('country')->nullable();
        $table->string('cityname')->nullable();
        $table->string('address')->nullable(); // Change data type to string
        $table->integer('postalcode')->nullable(); // Change data type to string
        $table->string('cardname')->nullable(); // Change data type to string
        $table->integer('cardnumber')->nullable(); // Change data type to string
        $table->integer('expmonth')->nullable(); // Change data type to string
        $table->integer('expyear')->nullable(); // Change data type to string
        $table->integer('cvv')->nullable(); // Change data type to string
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
        Schema::dropIfExists('payments');
    }
}
