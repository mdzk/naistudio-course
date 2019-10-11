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
                  <div class="input-group">
                    <form style="display: inherit;" method="GET" action="{{ url('/admin/alumni/cari') }}">
                      <input type="text" name="kata" class="form-control" placeholder="Cari Alumni ...">
                      <span class="input-group-btn">
                      <button class="btn btn-default" type="submit" name="submit">Go!</button>
                    </span>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <ul class="pagination pagination-split">
                          <h2>Total Alumni : {{ count($alumni) }}</h2>
                        </ul>
                      </div>

                      <div class="clearfix"></div>

                      @foreach($alumni as $a)

                      <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <h4 class="brief"><i>{{ $a->status }}</i></h4>
                            <div class="left col-xs-7">
                              <h2>{{ $a->nama }}</h2>
                              <p><strong>Dari </strong> {{ $a->asal }} </p>
                              <ul class="list-unstyled">
                                <li><i class="fa fa-building"></i> Address: {{ $a->alamat }}</li>
                                <li><i class="fa fa-phone"></i> Telepon: {{ $a->nomor }} </li>
                                <li><i class="fa fa-graduation-cap"></i> Angkatan {{ $a->tahun }} </li>
                              </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="{{ url('') }}/assets/img/alumni/{{ $a->gambar }}" alt="" class="img-circle img-responsive">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom">

                            <div class="col-xs-12 col-sm-6 emphasis">
                              <a type="button" href="{{ url('/admin/alumni/edit/' . $a->id . '/' .str_slug($a->nama, '-')) }}" class="btn btn-warning btn-xs">
                                <i class="fa fa-edit"> </i> Edit
                              </a>
                              <a type="button" onclick="return confirm('Apakah anda yakin menghapus data ini?')" href="{{ url('/admin/alumni/del/' . $a->id . '/' .str_slug($a->nama, '-')) }}" class="btn btn-danger btn-xs">
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