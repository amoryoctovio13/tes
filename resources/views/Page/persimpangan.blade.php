@extends('master.layout')

@section('content')
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Input Persimpangan</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="">
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="namapersimpangan">Nama Persimpangan</label>
                  <input type="text" class="form-control" name="namapersimpangan" placeholder="Nama Persimpangan">
                </div>
                <div class="form-group">
                  <label for="kota">kota</label>
                  <input type="text" class="form-control" name="kota" placeholder="Kota">
                </div>
                <div class="form-group">
                  <label for="utara">utara</label>
                  <input type="text" class="form-control" name="utara" placeholder="utara">
                </div>
                <div class="form-group">
                  <label for="timur">timur</label>
                  <input type="text" class="form-control" name="timur" placeholder="timur">
                </div>
                <div class="form-group">
                  <label for="barat">barat</label>
                  <input type="text" class="form-control" name="barat" placeholder="barat">
                </div>
                <div class="form-group">
                  <label for="selatan">selatan</label>
                  <input type="text" class="form-control" name="selatan" placeholder="selatan">
                </div>
                
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a href="/instansi" button type="button" class="btn btn-default badge-pill" style="padding-right:80px,width:80px">Back</a>
              </div>
            </form>
          </div>
@endsection