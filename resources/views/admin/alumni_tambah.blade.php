@extends('admin.template')
@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Alumni</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

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
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Nama Alumni</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="nama" placeholder="Johnes" @if(isset($alumni)) value="{{ $alumni->nama }}" @endif>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Status</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="status" placeholder="Pelajar" @if(isset($alumni)) value="{{ $alumni->status }}" @endif>
                          <span class="fa fa-info-circle form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Dari</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="asal" placeholder="SMK Negeri" @if(isset($alumni)) value="{{ $alumni->asal }}" @endif>
                          <span class="fa fa-briefcase form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Telepon</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="nomor" placeholder="0812 3456 7890" @if(isset($alumni)) value="{{ $alumni->nomor }}" @endif>
                          <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Alamat</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="alamat" placeholder="Metro" @if(isset($alumni)) value="{{ $alumni->alamat }}" @endif>
                          <span class="fa fa-map-marker form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Angkatan</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="tahun" value="{{ date('Y') }}" placeholder="{{ date('Y') }}" @if(isset($alumni)) value="{{ $alumni->tahun }}" @endif>
                          <span class="fa fa-graduation-cap form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Pesan</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <textarea name="pesan" id="pesan" class="form-control" placeholder="Naistudio merupakan lembaga kursus yang recommended">@if(isset($alumni)) {{ $alumni->pesan }} @endif</textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Foto</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="file" name="gambar" class="form-control" @if(isset($alumni)) value="{{ $alumni->gambar }}" @endif>
                          <span class="fa fa-upload form-control-feedback right" aria-hidden="true"></span>
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

            </div>

          </div>
        </div>
        <!-- /page content -->
@endsection