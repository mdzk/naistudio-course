@extends('admin.template')
@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>User Manager</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                      </div>
                      <div class="clearfix"></div>

                      @foreach($user as $a)

                      <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <h4 class="brief"><i>{{ $a->status }}</i></h4>
                            <div class="left col-xs-7">
                              <h2>{{ $a->name }}</h2>
                              <ul class="list-unstyled">
                                <li><i class="fa fa-building"></i> Address: {{ $a->alamat }}</li>
                                <li><i class="fa fa-envelope"></i><a href="mailto:{{ $a->email }}">&nbsp;{{ $a->email }}</a></li>
                                <li><i class="fa fa-globe"></i> <a href="http://{{ $a->website }}" target="_blank">{{ $a->website }}</a></li>
                              </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="{{ url('') }}/assets/img/user/{{ $a->gambar }}" alt="" class="img-circle img-responsive">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom">

                            <div class="col-xs-12 col-sm-6 emphasis">
                              <a type="button" href="{{ url('admin/user/edit/' . $a->id . '/' . str_slug($a->name, '-')) }}" class="btn btn-warning btn-xs">
                                <i class="fa fa-edit"> </i> Edit
                              </a>
                              <a type="button" href="{{ url('/admin/user/del/' . $a->id . '/' . str_slug($a->name, '-')) }}" class="btn btn-danger btn-xs">
                                <i class="fa fa-close"> </i>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>

                      @endforeach

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
@endsection