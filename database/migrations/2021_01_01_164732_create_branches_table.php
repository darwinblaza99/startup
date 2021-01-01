<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->increments('Branchesid');
            $table->string('BranchesDesc');
            $table->string('Address');
            $table->string('Manager');
            $table->string('PO_ContactName');
            $table->integer('ContactNumber');
            $table->string('TIN');
            $table->integer('POS_SerialNumber');
            $table->string('EmailAddress');
            $table->string('POS_permitToUseNumber');
            $table->string('ACRONYM');
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
        Schema::dropIfExists('branches');
    }
}
