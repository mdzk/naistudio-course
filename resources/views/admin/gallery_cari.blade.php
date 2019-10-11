@extends('admin.template')
@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> Total <b>{{ count($gambar) }}</b> ditemukan, pencarian dari kata <b>{{ $_GET['kata'] }}</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <form style="display: inherit;" method="GET" action="{{ url('/admin/gallery/cari') }}">
                      <input type="text" name="kata" class="form-control" placeholder="Cari Foto...">
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
                  <div class="x_title">
                    <h2>Media Gallery</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      @foreach($gambar as $g)
                      <div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="{{ url('') }}/assets/img/gallery/{{ $g->gambar }}" alt="image" />
                            <div class="mask">
                              <p>{{ $g->nama }}</p>
                              <div class="tools tools-bottom">
                                <a href="{{ url('') }}/assets/img/gallery/{{ $g->gambar }}" target="_blank"><i class="fa fa-link"></i></a>
                                <a href="{{ url('admin/gallery/del/' . $g->id . '/' . str_slug($g->nama, '-')) }}"><i class="fa fa-close"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>{{ $g->nama }}</p>
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