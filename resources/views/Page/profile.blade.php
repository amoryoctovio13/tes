@extends('master.layout')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="">
      <ol class="breadcrumb">
        <li></i> User Profile</a></li>
      </ol>
    </section>

    <!-- Main content -->
  <div style="padding:2px">
    <section class="content">
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <div class="tab-content">
              <div class="active tab-pane" id="activity">   

              <div class="tab-pane" id="settings">
                <form method="post" action="/profile/save" class="form-horizontal">

                  <!--Kelompok name-->
                  <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Nama</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    </div>
                  </div>

                  <!--Kelompok email-->
                  <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                  </div>

                   <!--Kelompok password-->
                   <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">Password</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                  </div>
                  
                  <!--Kelompok Submit-->
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
    <!-- /.content -->
@endsection