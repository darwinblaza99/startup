<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('name');
            $table->integer('phone')->nullable();;
            $table->string('email')->unique();
            $table->timestamp('email_verified_at'); //->nullable()
            $table->string('username')->nullable(); //unique
            $table->string('password');
            // $table->integer('type_id')->unsigned();
            $table->foreignId('AccPosid');
            $table->foreignId('AccTypeid');
            $table->string('image')->nullable();
            $table->rememberToken();
            $table->timestamps();

            // $table->foreign('typeid')
            // ->references('id')
            // ->on('types')
            // ->onDelete('cascades');

            // $table->foreign('posid')
            //     ->references('id')
            //     ->on('positions')
            //     ->onDelete('cascades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
