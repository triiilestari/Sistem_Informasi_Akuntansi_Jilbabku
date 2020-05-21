<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_users');
            $table->string('Nama');
            $table->string('KodeBarang')->unique(); 
            $table->string('NamaBarang');
            $table->string('JenisBarang');
            $table->integer('Harga');
            $table->integer('Jumlah');
            $table->timestamps();

            $table->foreign('id_users')->references('id')->on('users')->ondelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produks');
    }
}
