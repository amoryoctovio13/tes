@extends('master.layout')

@section('content')
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Submit Laporan Insiden</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="/laporan_insiden/save">
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" name="nama" placeholder="Nama">
                </div>
                <div class="form-group">
                  <label for="nomor_telpon">No Telpon</label>
                  <input type="number" class="form-control" name="nomor_telpon" placeholder="No Telpon">
                </div>
                <div class="form-group">
                  <label for="lokasi_insiden">Lokasi Insiden</label>
                  <input type="text" class="form-control" name="lokasi_insiden" placeholder="Lokasi Insiden">
                </div>
                <div class="form-group">
                  <label for="jenis_kendaraan">Jenis Kendaraan</label>
                    <!-- untuk  memanggil npwp instansi rekanan -->
                    <select name="roda" class="form-control">
                        <option value="2">2</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <input type="text" class="form-control" name="keterangan" placeholder="Keterangan">
                </div>
                
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Submit">
              </div>
            </form>
          </div>
@endsection
