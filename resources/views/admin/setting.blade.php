@extends('admin.template')
@section('content')
  <style>
    #tags_1_addTag {
      /*display: none!important;*/
    }
  </style>
  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-6 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Website Setting</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />
              <form class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Favicon</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <img style="height: 50px;" src="{{ url('') }}/assets/img/{{ $config->favicon }}" alt="">
                    <input type="file" name="favicon" class="form-control">
                  </div>
                </div>

                <div class="ln_solid"></div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Logo</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <img style="height: 50px;" src="{{ url('') }}/assets/img/{{ $config->logo }}" alt="">
                    <input type="file" name="logo" class="form-control">
                  </div>
                </div>

                <div class="ln_solid"></div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Title</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="title" class="form-control" value="{{ $config->title }}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea name="description" id="description" class="form-control">{{ $config->description }}</textarea>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Keyword</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input id="tags_1" name="keyword" type="text" class="tags form-control" value="{{ $config->keyword }}" />
                    <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="ln_solid"></div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Phone</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="nomor" class="form-control" value="{{ $config->nomor }}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="email" class="form-control" value="{{ $config->email }}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea name="alamat" id="description" class="form-control">{{ $config->alamat }}</textarea>
                  </div>
                </div>

                <div class="clearfix"></div>
                <div class="ln_solid"></div>

                <div class="form-group">
                  <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                    <button type="submit" name="submit" class="btn btn-success">Submit</button>
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- /page content -->
@endsection