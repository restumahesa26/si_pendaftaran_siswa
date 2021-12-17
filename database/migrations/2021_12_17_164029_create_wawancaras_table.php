<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWawancarasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wawancaras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('orang_tua_id')->references('id')->on('orang_tuas');
            $table->foreignId('anak_id')->references('id')->on('anaks');
            $table->foreignId('pembayaran_id')->references('id')->on('pembayarans');
            $table->foreignId('berkas_id')->references('id')->on('berkas');
            $table->date('jadwal');
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
        Schema::dropIfExists('wawancaras');
    }
}
