<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBerkasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berkas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('orang_tua_id')->references('id')->on('orang_tuas');
            $table->foreignId('anak_id')->references('id')->on('anaks');
            $table->foreignId('pembayaran_id')->references('id')->on('pembayarans');
            $table->string('ktp_ortu');
            $table->string('kk');
            $table->string('akta_kelahiran');
            $table->boolean('status')->default(FALSE);
            $table->string('pesan')->nullable();
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
        Schema::dropIfExists('berkas');
    }
}
