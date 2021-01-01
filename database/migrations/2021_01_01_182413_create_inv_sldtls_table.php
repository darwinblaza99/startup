<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvSldtlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inv_sldtls', function (Blueprint $table) {
            $table->foreignId('BrCode');
            $table->foreignId('Location');
            $table->foreignId('ItemId');
            $table->foreignId('Tr_code');
            $table->foreignId('TR_CTLNO');
            $table->foreignId('TR_DATE');
            $table->foreignId('SEQNO');
            $table->integer('ClientID');
            $table->integer('TR_DOCNO');
            $table->integer('QTY');
            $table->integer('UnitCost');
            $table->integer('TotalCost');
            $table->integer('TaxAmount');
            $table->integer('RetailPrice');
            $table->integer('WholesalePrice');
            $table->integer('PaymentMethod')->nullable();
            $table->integer('UPDTAG')->nullable();
            $table->integer('MemberId')->nullable();
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
        Schema::dropIfExists('inv_sldtls');
    }
}
