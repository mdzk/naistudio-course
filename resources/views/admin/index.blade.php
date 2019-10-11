@extends('.admin.template')
@section('content')
<div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> User</span>
              <div class="count">{{ count($user) }}</div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Artikel</span>
              <div class="count">{{ count($artikel) }}</div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-image"></i> Foto</span>
              <div class="count">{{ count($gallery) }}</div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-graduation-cap"></i> Alumni</span>
              <div class="count">{{ count($alumni) }}</div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-eye"></i> Pengunjung</span>
              <div class="count">{{ $artikel->sum('dibaca')+$config->view }}</div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-comment"></i> Komentar</span>
              <div class="count">7,325</div>
            </div>
          </div>
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <h3>Menu Pintas</h3>
            </div>
          </div>
          <br />


          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Recent Post</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="dashboard-widget-content">

                    <ul class="list-unstyled timeline widget">


                      @foreach($recentPost as $a)
                      <li>
                        <div class="block">
                          <div class="block_content">
                            <h2 class="title">
                                              <a>{{ $a->judul }}</a>
                                          </h2>
                            <div class="byline">
                              <span>13 hours ago</span> by <a>{{ @$a->users->name }}</a>
                            </div>
                            <p class="excerpt">{!! substr(trim(strip_tags($a->isi)), 0,100) !!}… <a href="{{ url('detail/' . $a->id . '/' . $a->judul) }}" target="_blank">Read&nbsp;More</a>
                            </p>
                          </div>
                        </div>
                      </li>
                      @endforeach

                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection