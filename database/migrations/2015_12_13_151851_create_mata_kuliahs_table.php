<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMataKuliahsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('mata_kuliah', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 60);
            $table->string('kode', 10)->nullable();
            $table->text('deskripsi')->nullable();
            $table->integer('prodi_id')->unsigned();

            $table->foreign('prodi_id')->references('id')->on('program_studi')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('mata_kuliah');
    }
}
