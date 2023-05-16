<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('jenis_barang_id')->unsigned();
            $table->bigInteger('warna_id')->unsigned();
            $table->bigInteger('ukuran_id')->unsigned();
            $table->integer('harga')->default(0);
            $table->integer('stok')->default(0);
            $table->timestamps();
            $table->foreign('jenis_barang_id')->references('id')->on('jenis_barang');
            $table->foreign('warna_id')->references('id')->on('warna');
            $table->foreign('ukuran_id')->references('id')->on('ukuran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
}
