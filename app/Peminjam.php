<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peminjam extends Model
{
//Ini pimjam
protected $table = 'tb_peminjam';
protected $fillable = ['peminjam_kode','peminjam_nama','peminjam_alamat','peminjam_tlp','peminjam_toko'];
}
