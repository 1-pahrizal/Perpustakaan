<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbKartuPendaftaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_kartu_pendaftaran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('kartu_kode');
            $table->integer('petugas_kode');
            $table->integer('peminjam_kode');
            $table->date('kartu_tanggal_pembuatan');
            $table->date('kartu_tanggal_akhir');
            $table->integer('kartu_tanggal_aktif');
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
        Schema::dropIfExists('tb_kartu_pendaftaran');
    }
}
