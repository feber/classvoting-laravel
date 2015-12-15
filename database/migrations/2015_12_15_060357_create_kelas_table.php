<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',60);
            $table->integer('kapasitas')->unsigned()->default(0);
            $table->integer('peminat')->unsigned()->default(0);
            $table->integer('dosen_id')->unsigned();
            $table->integer('makul_id')->unsigned();

            $table->foreign('dosen_id')->references('id')->on('dosen')->onDelete('cascade');
            $table->foreign('makul_id')->references('id')->on('mata_kuliah')->onDelete('cascade');
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
        Schema::drop('kelas');
    }
}
