<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbBuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_buku', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('buku_kode');
            $table->integer('pnerbit_kode');
            $table->string('buku_judul');
            $table->integer('buku_jurnal');
            $table->string('buku_deskripsi');
            $table->string('buku_pengarang');
            $table->integer('tahun_terbit');
        
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
        Schema::dropIfExists('tb_buku');
    }
}
