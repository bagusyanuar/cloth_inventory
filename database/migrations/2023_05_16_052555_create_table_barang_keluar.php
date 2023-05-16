<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBarangKeluar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang_keluar', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('penjualan_id')->unsigned();
            $table->bigInteger('barang_id')->unsigned();
            $table->integer('qty')->default(0);
            $table->integer('harga')->default(0);
            $table->integer('total')->default(0);
            $table->timestamps();
            $table->foreign('penjualan_id')->references('id')->on('penjualan');
            $table->foreign('barang_id')->references('id')->on('barang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang_keluar');
    }
}
