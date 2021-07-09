@extends('master.layout')

@section('content')
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Form Intansi Rekanan</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="">
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
                        <option value="0">2</option>
                        <option value="1">4</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="namecontact">Nama Contact Person</label>
                  <input type="text" class="form-control" id="namecontact" name="namecontact" placeholder="Nama Contact Person">
                </div>
                
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a href="/instansi" button type="button" class="btn btn-default badge-pill" style="padding-right:80px,width:80px">Back</a>
              </div>
            </form>
          </div>
@endsection