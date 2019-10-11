@extends('admin.template')
@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>User Profile</h3>
              </div>


            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="{{ url('') }}/assets/img/user/{{ Auth::user()->gambar }}" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3>{{ Auth::user()->name }}</h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> {{ Auth::user()->alamat }}
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> {{ Auth::user()->status }}
                        </li>

                        <li class="m-top-xs">
                          <i class="fa fa-external-link user-profile-icon"></i>
                          <a href="http://{{ Auth::user()->website }}" target="_blank">{{ Auth::user()->website }}</a>
                        </li>
                      </ul>

                      <a href="{{ url('admin/user/edit/' . Auth::user()->id . '/' . str_slug(Auth::user()->name, '-')) }}" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                      <br />

                      </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Recent Post</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a>
                          </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                            <!-- start recent activity -->
                            @foreach($artikel as $a)
                            <ul class="messages">
                              <li>
                                <img src="{{ url('') }}/assets/img/thumb/{{ $a->gambar }}" class="avatar" alt="Avatar">
                                <div class="message_date">
                                  <p class="month">{{ $a->tanggal }}</p>
                                </div>
                                <div class="message_wrapper">
                                  <h4 class="heading"><a target="_blank" href="{{ url('detail/' . $a->id . '/' . str_slug($a->judul, '-')) }}">{{ $a->judul }}</a></h4>
                                  <blockquote class="message">{!! substr(trim(strip_tags($a->isi)), 0,150) !!}</blockquote>
                                  <br />
                                </div>
                              </li>
                            </ul>
                            @endforeach
                            <!-- end recent activity -->
                            {{ $artikel->links() }}
                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                            <p>{{ Auth::user()->bio }}</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
@endsection