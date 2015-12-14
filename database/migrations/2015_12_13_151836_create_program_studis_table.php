<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramStudisTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('program_studi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 60);
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('program_studi');
    }
}
