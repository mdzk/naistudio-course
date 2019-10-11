@extends('admin.template')
@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Kategori <small></small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <!-- form input mask -->
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Data</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Nama Kategori</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="nama_kategori" placeholder="Tutorial" >
                          <span class="fa fa-tags form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>

                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
              <!-- /form input mask -->
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">

                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nama Kategori</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        $i = 1;
                        foreach ($kategori as $k) {
                      ?>
                        <tr>
                          <th scope="row">{{ $i++ }}</th>
                          <td>{{ $k->nama_kategori }}</td>
                          <td>
                            <a href="{{ url('/admin/kategori/edit/' . $k->id . '/' .str_slug($k->nama_kategori, '-')) }}" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i></a>
                            <a href="{{ url('/admin/kategori/del/' . $k->id . '/' .str_slug($k->nama_kategori, '-')) }}" class="btn btn-xs btn-danger"><i class="fa fa-close"></i></a>
                          </td>
                        </tr>
                      <?php } ?>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
@endsection