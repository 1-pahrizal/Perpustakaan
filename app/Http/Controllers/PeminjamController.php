<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamController extends Controller
{
    
    public function index(Request $request)
      {
        $data_peminjam =\App\Peminjam::all();
        return view('peminjam.index',['data_peminjam' => $data_peminjam]);
    }
    public function create(Request $request)
    {
        \App\Peminjam::create($request->all());
        return redirect('/peminjam')->with('sukses','Data Berhasil Dihapaus');
    }
    public function edit($id)
    {
        $tb_peminjam =\App\Peminjam::find($id);
        return view('peminjam/edit',['peminjam' => $tb_peminjam]); 
    }
    public function update(Request $request,$id)
    {
        $tb_peminjam =\App\Peminjam::find($id);
        $tb_peminjam->update($request->all());
        return redirect('/peminjam')->with('sukses','Data Berhasil di update');
    }
    public function delete($id)
    {
        $tb_peminjam =\App\Peminjam::find($id);
        $tb_peminjam ->delete($tb_peminjam);
        return redirect('/peminjam')->with('sukses','Data Behasil diHapus');
        
 }

}
