<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_tracks', function (Blueprint $table) {
            $table->id('trackID')->autoIncrement();
            $table->integer('strandID');
            $table->integer('sequence')->nullable(true);
            $table->string('description');
            $table->string('hours')->nullable(true);
            $table->string('prerequisite')->nullable(true);
            $table->integer('status')->default(1);
            $table->string('category');
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
        Schema::dropIfExists('academic_tracks');
    }
}
