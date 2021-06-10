@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Inputs</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/peminjam/{{$peminjam->id }}/update" method="POST">
                                {{ csrf_field() }}
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Peminjam_kode</label>
                                    <input name="peminjam_kode" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nis"
                                    value="{{ $peminjam->peminjam_kode }}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Peminjaman_nama</label>
                                    <input name="peminjam_nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama LengKap"
                                    value="{{ $peminjam->peminjam_nama}}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                    <textarea name="peminjam_alamat" class="form-control" type="text"  id="exampleInputTextarea1" rows="3" placeholder="Enter alamat"
                                   > {{ $peminjam->peminjam_alamat }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Peminjam_telepon</label>
                                    <input name="peminjam_tlp" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama LengKap"
                                    value="{{ $peminjam->peminjam_tlp }}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Peminjam_toko</label>
                                    <input name="peminjam_toko" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama LengKap"
                                    value="{{ $peminjam->peminjam_toko }}">
                                </div>
                            <button type="submit" class="btn btn-warning">Update</button>
                            </form> 
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop 
@section('content2')
        <h1>Edit data Siswa</h1>
            @if(session('sukses'))  
            <div class="alert alert-success" role="alert">
              {{ session('sukses') }}
              </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                    <form action="/peminjam/{{$peminjam->id}}/update" method="POST">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Peminjam_kode</label>
                            <input name="nis" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nis"
                            value="{{ $peminjam->peminjam_kode }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Peminjaman_nama</label>
                            <input name="peminjam_kode" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama LengKap"
                            value="{{ $peminjam->peminjam_nama}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Alamat</label>
                            <textarea name="alamat" class="form-control" type="text"  id="exampleInputTextarea1" rows="3" placeholder="Enter alamat"
                           > {{ $peminjam->peminjam_alamat }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Peminjam_telepon</label>
                            <input name="peminjam_tlp" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama LengKap"
                            value="{{ $peminjam->peminjam_tlp }}">
                        </div>
                    <button type="submit" class="btn btn-warning">Update</button>
                    </form>
            </div>   
            </div>
            @endsection
