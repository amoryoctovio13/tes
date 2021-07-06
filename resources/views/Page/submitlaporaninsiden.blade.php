@extends('master.layout')

@section('content')
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Form Intansi Rekanan</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="" action="">
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="instansirekanan">Instansi Rekanan</label>
                  <input type="text" class="form-control" id="instansirekanan" name="instansirekanan" placeholder="Instansi Rekanan">
                </div>
                <div class="form-group">
                  <label for="npwp">Skala Prioritas</label>
                    <!-- untuk  memanggil npwp instansi rekanan -->
                    <select name="skala" class="form-control">
                        <option value="0">Tidak</option>
                        <option value="1">Penting</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                </div>
                <div class="form-group">
                  <label for="npwp">NPWP</label>
                  <input type="number" class="form-control" id="npwp" name="npwp"placeholder="NPWP">
                </div>
                <div class="form-group">
                  <label for="namecontact">Nama Contact Person</label>
                  <input type="text" class="form-control" id="namecontact" name="namecontact" placeholder="Nama Contact Person">
                </div>
                <div class="form-group">
                  <label for="contactperson">Contact Person</label>
                  <input type="number" class="form-control" id="contactperson" name="contact" placeholder="Contact Person">
                </div>
                
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a href="/instansi" button type="button" class="btn btn-default badge-pill" style="padding-right:80px,width:80px">Back</a>
              </div>
            </form>
          </div>
@endsection