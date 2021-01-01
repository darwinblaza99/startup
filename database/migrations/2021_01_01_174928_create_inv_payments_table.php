<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inv_payments', function (Blueprint $table) {
            $table->foreignId('BrCode');
            $table->foreignId('Tr_code');
            $table->foreignId('Tr_CTLNO');
            $table->foreignId('SEQNO');
            $table->integer('PaymentMethodId');
            $table->integer('Tr_AMT');
            $table->integer('SLC_code');
            $table->integer('SLT_code');
            $table->integer('COAID')->nullable();
            $table->integer('AddOnInterest')->nullable();
            $table->integer('AddOnServiceFee')->nullable();
            $table->integer('CardId')->nullable();
            $table->integer('CardNumber')->nullable();
            $table->integer('CardName')->nullable();
            $table->integer('Expiry')->nullable();
            $table->integer('ApprovalCode')->nullable();
            $table->integer('CHECKNO')->nullable();
            $table->integer('BankName')->nullable();
            $table->integer('CheckDate')->nullable();
            $table->integer('IssuedByName')->nullable();
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
        Schema::dropIfExists('inv_payments');
    }
}
