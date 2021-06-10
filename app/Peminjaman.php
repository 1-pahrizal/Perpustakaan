<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
protected $table = 'tb_peminjaman';
protected $fillable = ['peminjaman_kode','petugas_kode','peminjaman_tgl','peminjaman_kembalian'];
}
