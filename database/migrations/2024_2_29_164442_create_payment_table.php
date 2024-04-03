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
        $table->string('lastname')->nullable();
        $table->string('email')->nullable();
        $table->string('country')->nullable();
        $table->string('cityname')->nullable();
        $table->string('address')->nullable(); // Change data type to string
        $table->string('postalcode')->nullable(); // Change data type to string
        $table->decimal('totalprice', 10, 2)->nullable(); // Change data type to decimal
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
