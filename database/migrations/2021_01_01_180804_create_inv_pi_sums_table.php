<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvPiSumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inv_pi_sums', function (Blueprint $table) {
            $table->foreignid('BrCode');
            $table->increments('TR_CTLNO');
            $table->integer('TR_DOCNO');
            $table->date('TR_DATE');
            $table->date('BEGIN_DATE');
            $table->time('TR_TIME');
            $table->string('Explanation');
            $table->integer('StatusId');
            $table->string('EncodeBy');
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
        Schema::dropIfExists('inv_pi_sums');
    }
}
