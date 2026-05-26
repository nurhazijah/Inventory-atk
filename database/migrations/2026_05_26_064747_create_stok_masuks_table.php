<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStokMasuksTable extends Migration
{
    public function up()
    {
        Schema::create('stok_masuks', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('barang_id');

            $table->foreign('barang_id')
                  ->references('id')
                  ->on('barang')
                  ->onDelete('cascade');

            $table->integer('jumlah');

            $table->date('tanggal_masuk');

            $table->string('keterangan')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stok_masuks');
    }
}