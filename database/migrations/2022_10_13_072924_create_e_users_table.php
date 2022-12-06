<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('e_users', function (Blueprint $table) {
            $table->id('userID')->autoIncrement();
            $table->string('username');
            $table->string('password');
            $table->string('firstname')->nullable(true);
            $table->string('middlename')->nullable(true);
            $table->string('lastname')->nullable(true);
            $table->string('lrn')->nullable(true);
            $table->string('track')->nullable(true);
            $table->string('email')->nullable(true);
            $table->integer('userType');
            $table->timestamps();
        });
    }

    /**
     * 
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('e_users');
    }
}
