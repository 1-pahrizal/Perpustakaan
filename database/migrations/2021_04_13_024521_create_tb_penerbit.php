<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbPenerbit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_penerbit', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('penerbit_kode');
            $table->string('pemerbit_nama');
            $table->string('penerbit_alamat');
            $table->integer('penerbit_tpl');
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
        Schema::dropIfExists('tb_penerbit');
    }
}
