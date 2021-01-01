<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvPaymentMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inv_payment_methods', function (Blueprint $table) {
            $table->id();
            $table->string('Desc');
            $table->foreignId('BrCode');
            $table->integer('SLC_code');
            $table->integer('SLT_code');
            $table->integer('COAID')->nullable();
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
        Schema::dropIfExists('inv_payment_methods');
    }
}
