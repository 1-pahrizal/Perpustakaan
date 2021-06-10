<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbDetailPinjaman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_detail_pinjaman', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->integer('peminjaman_kode');
            $table->integer('buku_kode');
            $table->date('detail_tgl_kembali');
            $table->date('detail_denda');
            $table->date('detail_status_kembali');
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
        Schema::dropIfExists('tb_detail_pinjaman');
    }
}
