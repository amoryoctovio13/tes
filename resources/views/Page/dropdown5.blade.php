@extends('master.layout')

@section('content')
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Form List Surat Masuk</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="" action="">
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="no_surat">No Surat</label>
                  <input type="text" class="form-control" id="no_surat" name="no_surat" placeholder="Nomor Surat">
                </div>
                <div class="form-group">
                  <label for="perihal">Perihal</label>
                  <input type="text" class="form-control" id="perihal" name="perihal" placeholder="Perihal">
                </div>
                <div class="form-group">
                  <label for="instansipengirim">Instansi Pengirim</label>
                  <input type="text" class="form-control" id="instansipengirim" name="instansipengirim"placeholder="Perusahaan">
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <input type="text" class="form-control" id="keterangan" name="Keterangan"placeholder="Perusahaan">
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a href="/listsuratmasuk" button type="button" class="btn btn-default badge-pill" style="padding-right:80px,width:80px">Back</a>
              </div>
            </form>
          </div>


<div class="box">
        <div class="box-header">
            <h3 class="box-title"><b>Table List Surat Masuk</b></h3>
        </div>
        <div class="card-body" style="padding:10px">
            <a href="/listsuratmasuk/create" button type="button" class="btn btn-primary badge-pill" style="padding-right:80px,width:80px">Create</a>
        </div>
        
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No. Surat</th>
                        <th>Perihal</th>
                        <th>Instansi Pengirim</th>
                        <th>Status Surat Masuk</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                <?php $no = 1;?>
                    @foreach($listsuratmasuk as $lsm)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$lsm->no_surat}}</td>
                        <td>{{$lsm->perihal}}</td>
                        <td>{{$lsm->instansipengirim}}</td>
                        <td>{{$lsm->statussuratmasuk}}</td>
                        <td>
                            <a href="/listsuratmasuk/edit/{{ $lsm->id }}" button type="button" class="btn btn-info badge-pill" style="padding-right:80px,width:80px">Edit</a>
                            <a href="/listsuratmasuk/view/{{ $lsm->id }}" button type="button" class="btn btn-warning badge-pill" style="padding-right:80px,width:80px">View</a>
                            <a href="/listsuratmasuk/delete/{{ $lsm->id }}" button type="button" class="btn btn-danger badge-pill" style="padding-right:80px,width:80px">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>No. Surat</th>
                        <th>Perihal</th>
                        <th>Instansi Pengirim</th>
                        <th>Status Surat Masuk</th>
                        <th>Action</th>
                    </tr>
                </tfoot>

            </table>
        </div>
@endsection
