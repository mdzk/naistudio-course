<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="{{ url('') }}/assets/img/{{ $config->favicon }}" type="image/ico" />

    <title>{{ Auth::user()->name }} | Admin {{ $config->title }}</title>

    <!-- Bootstrap -->
    <link href="{{ url('') }}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ url('') }}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ url('') }}/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{ url('') }}/admin" class="site_title"><img style="width: 80%;" src="{{ url('') }}/assets/img/{{ $config->logo }}" alt=""></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ url('') }}/assets/img/user/{{ Auth::user()->gambar }}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Auth::user()->name }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{ url('') }}/admin"><i class="fa fa-home"></i> Home </a></li>
                  <li><a><i class="fa fa-edit"></i> Artikel <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('admin/artikel') }}">Artikel</a></li>
                      <li><a href="{{ url('admin/artikel/editor') }}">Tambah Artikel</a></li>
                    </ul>
                  </li>
                  <li><a href="{{ url('admin/kategori') }}"><i class="fa fa-tags"></i> Kategori </a>
                  </li>
                  <li><a><i class="fa fa-graduation-cap"></i> Alumni <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('admin/alumni') }}">Alumni</a></li>
                      <li><a href="{{ url('admin/alumni/form') }}">Tambah Alumni</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-image"></i> Gallery <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('admin/gallery') }}">Gallery</a></li>
                      <li><a href="{{ url('admin/gallery/form') }}">Tambah Foto</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-puzzle-piece"></i> Karya <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('admin/karya') }}">Karya</a></li>
                      <li><a href="{{ url('admin/karya/form') }}">Tambah Karya</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-user"></i> User <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('admin/profile') }}">Profile</a></li>
                      <li><a href="{{ url('admin/user') }}">User Management</a></li>
                      <li><a href="{{ url('admin/user/form') }}">Tambah User</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Web</h3>
                <ul class="nav side-menu">
                  <li><a href="{{ url('admin/setting') }}"><i class="fa fa-gear"></i> Setting </a>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" href="{{ url('admin/setting') }}" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ url('') }}/logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{ url('') }}/assets/img/user/{{ Auth::user()->gambar }}" alt="">{{ Auth::user()->name }}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="{{ url('admin/profile') }}"> Profile</a></li>
                    <li>
                      <a href="{{ url('admin/setting') }}">
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="{{ url('') }}/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        @yield('content')
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            make with <span style="color: red;">&hearts;</span> and cup of <i style="color: saddlebrown;" class="fa fa-coffee"></i> . thanks to <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ url('') }}/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{ url('') }}/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="{{ url('') }}/vendors/fastclick/lib/fastclick.js"></script>
    <!-- gauge.js -->
    <script src="{{ url('') }}/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- Skycons -->
    <script src="{{ url('') }}/vendors/skycons/skycons.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ url('') }}/build/js/custom.min.js"></script>
    <link rel="stylesheet" href="{{ url('summernote/summernote.css') }}">
    <link rel="stylesheet" href="{{ url('summernote/summernote-bs4.css') }}">
    <script type="text/javascript" src="{{ url('summernote/summernote.min.js') }}"></script>
    <script src="{{ url('') }}/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="{{ url('') }}/vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="{{ url('') }}/vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="{{ url('') }}/vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="{{ url('') }}/vendors/autosize/dist/autosize.min.js"></script>
    <script>
        $('.textarea').summernote({
            'height' : 250
        });
    </script>
  </body>
</html>
