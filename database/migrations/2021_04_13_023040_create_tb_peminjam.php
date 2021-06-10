<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbPeminjam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_peminjam', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('peminjam_kode');
            $table->string('peminjam_nama');
            $table->string('peminjam_alamat');
            $table->bigInteger('peminjam_tlp');
            $table->string('peminjam_toko');
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
        Schema::dropIfExists('tb_peminjam');
    }
}
