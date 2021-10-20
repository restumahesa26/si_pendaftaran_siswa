<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anaks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('orang_tua_id')->references('id')->on('orang_tuas');
            $table->string('nama', 40);
            $table->string('tempat_lahir', 30);
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['L','P']);
            $table->string('agama', 15);
            $table->enum('golongan_darah', ['A','B','AB','O']);
            $table->string('alamat', 50);
            $table->enum('jenjang', ['PAUD','TK','SD']);
            $table->string('nama_wali', 40)->nullable();
            $table->string('pekerjaan_wali', 25)->nullable();
            $table->string('alamat_wali', 50)->nullable();
            $table->string('hubungan_dengan_wali', 20)->nullable();
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
        Schema::dropIfExists('anaks');
    }
}
