<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemasukkansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemasukkans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nama');
            $table->string('KodeBarang');
            $table->integer('Jumlah');
            $table->integer('Total');
            $table->timestamps();


            $table->foreign('KodeBarang')->references('KodeBarang')->on('produks')->ondelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemasukkans');
    }
}
