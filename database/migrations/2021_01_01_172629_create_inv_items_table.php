<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inv_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Brcode');
            $table->Biginteger('UPC');
            $table->string('Desc');
            $table->string('AlternateLookup');
            $table->date('TrDate');
            $table->string('ItemType');
            $table->string('ItemStatus');
            $table->integer('VendorId');
            $table->string('BinLocation');
            $table->integer('AvgCost');
            $table->string('OrderCost');
            $table->integer('OrderQty');
            $table->integer('RetailPrice');
            $table->integer('WholeSalePrice');
            $table->integer('ReorderQty');
            $table->string('Tagging')->nullable();
            $table->integer('ProductId')->nullable();
            $table->string('Varriants');
            $table->integer('ItemSize');
            $table->integer('ItemUnitID');
            $table->integer('BrandID');
            $table->integer('CommonNameID');
            $table->integer('ItemClassID');
            $table->integer('ItemSubclassID');
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
        Schema::dropIfExists('inv_items');
    }
}
