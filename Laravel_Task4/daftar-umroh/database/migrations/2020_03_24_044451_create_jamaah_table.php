<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJamaahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jamaah', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_lengkap', 100);
            $table->string('nomor_ktp', 16);
            $table->string('nomor_telepon', 18);
            $table->string('email', 100);
            $table->integer('id_keberangkatan')->unsigned();;
            $table->foreign('id_keberangkatan')->references('id')->on('keberangkatan');
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
        Schema::dropIfExists('jamaah');
    }
}
