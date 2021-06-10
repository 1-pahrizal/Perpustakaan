@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
							<!-- CONDENSED TABLE -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Peminjam</h3>
                                    <div class="right">
                                    <button type="button" class="btn"  data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                                    </button>
                                </div>   
								</div>
								<div class="panel-body">
									<table class="table table-condensed">
										<thead>
											<tr>
                                                <th>No.</th>
                                                <th>Peminjam_kode</th>
                                                <th>Peminjama_nama</th>
                                                <th>Peminjam_Alamat</th>
                                                <th>Peminjam_TePeLon</th>
                                                <th>Peminjam_Toko</th>
                                                <th>Aksi</th>
											</tr>
										</thead>
										<tbody>
                                                <?php $no=1; ?>
                                                @foreach($data_peminjam as $tb_peminjam)
                                            <tr>
                                                <td>{{ $no++}}</td>
                                                <td>{{ $tb_peminjam->peminjam_kode}}</td>
                                                <td>{{ $tb_peminjam->peminjam_nama}}</td>
                                                <td>{{ $tb_peminjam->peminjam_alamat}}</td>
                                                <td>{{ $tb_peminjam->peminjam_tlp}}</td>
                                                <td>{{ $tb_peminjam->peminjam_toko}}</td>
                                                  <td>
                                                    <a href="/peminjam/{{$tb_peminjam->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                                    <a href="/peminjam/{{$tb_peminjam->id }}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yankin akan di hapus')">
                                                        Delete</a>
                                                </td>
                                          </tr>
                                        @endforeach
										</tbody>
									</table>
								</div>
							</div>
							<!-- END CONDENSED TABLE -->
						</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                      <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Input Peminjam </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
           </button>
          </div>
      <div class="modal-body">
      <form action="/peminjam/create" method="POST">
          {{csrf_field()}}
          <div class="form-group">
              <label for="exampleInputEmail1" class="form-label">Peminjam Kode</label>
              <input name="peminjam_kode" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan kode">
          </div>
          <div class="form-group">
              <label for="exampleInputEmail1" class="form-label">Nama Peminjam</label>
              <input name="peminjam_nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama LengKap">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Alamat Peminjam</label>
            <textarea name="peminjam_alamat" type="text" name="alamat" class="form-control mb-2 @error('alamat') is-invalid @enderror" id="alamat" placeholder="Enter alamat"></textarea>
        </div>
         <div class="form-group">
              <label for="exampleInputEmail1" class="form-label">nomor Peminjam</label>
              <input name="peminjam_tlp" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama LengKap">
          </div>
          <div class="form-group">
              <label for="exampleInputEmail1" class="form-label">Peminjam Toko</label>
              <input name="peminjam_toko" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama LengKap">
          </div>
    </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div> 
          </div>
        </div>
@stop