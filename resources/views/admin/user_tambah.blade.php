@extends('admin.template')
@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form User</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" method="POST" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                      @csrf
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="name" name="name" required="required" class="form-control col-md-7 col-xs-12" @if(isset($user)) value="{{ $user->name }}" @endif>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12" @if(isset($user)) value="{{ $user->email }}" @endif>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="username" class="control-label col-md-3 col-sm-3 col-xs-12">Username <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="username" class="form-control col-md-7 col-xs-12" type="text" required="required" name="username" @if(isset($user)) value="{{ $user->username }}" @endif>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="alamat" class="control-label col-md-3 col-sm-3 col-xs-12">Alamat <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="alamat" class="form-control col-md-7 col-xs-12" type="text" required="required" name="alamat" @if(isset($user)) value="{{ $user->alamat }}" @endif>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="status" class="control-label col-md-3 col-sm-3 col-xs-12">Status <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="status" class="form-control col-md-7 col-xs-12" type="text" required="required" name="status" @if(isset($user)) value="{{ $user->status }}" @endif>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="website" class="control-label col-md-3 col-sm-3 col-xs-12">Website</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="website" class="form-control col-md-7 col-xs-12" type="text" name="website" @if(isset($user)) value="{{ $user->website }}" @endif>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="bio" class="control-label col-md-3 col-sm-3 col-xs-12">Bio <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea name="bio" id="bio" class="form-control" required="required">@if(isset($user)) {{ $user->bio }} @endif</textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gambar">Foto
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="gambar" name="gambar" class="date-picker form-control col-md-7 col-xs-12" type="file">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="password" class="control-label col-md-3 col-sm-3 col-xs-12">Password </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password" class="form-control col-md-7 col-xs-12" type="password" name="password">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Password Verification </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password2" class="form-control col-md-7 col-xs-12"  type="password" name="password2">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						  <button class="btn btn-danger" type="reset">Reset</button>
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