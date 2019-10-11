<!DOCTYPE html>
<html>

<!--

* ++++++++++++++++++++++++++++++++++++++++++++++++
* Name 		    :   Naiscourse
* Author	 	:	mdzaky
* Author URL 	:	mdzaky.com
* Create		: 	27th January 2019
* ++++++++++++++++++++++++++++++++++++++++++++++++

-->

<head>
    <meta charset="utf-8">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, shrink-to-fit=no">
    <!-- Title -->
    <title>@yield('title') - {{ $config->title }}</title>
    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/css/style.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url('') }}/assets/img/{{ $config->favicon }}">
    <!-- Keyword Description -->
    <meta content='{{ $config->description }}' name='description'/>
    <meta content='{{ $config->keyword }}' name='keywords'/>
</head>
<body>

<!-- Menu Navigasi -->
<div id="menu" class="">
    <div class="container">
        <div class="title"><a href="{{ url('/') }}"><img id="logo" src="{{ url('') }}/assets/img/{{ $config->logo }}"></a></div>
        <nav id="nav">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/kursus') }}">Paket Kursus</a></li>
                <li><a href="{{ url('/testimoni') }}">Testimoni</a></li>
                <li><a href="{{ url('/artikel') }}">Artikel</a></li>
                <li><a href="{{ url('/alumni') }}">Alumni</a></li>
                <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                <li><a href="{{ url('/karya') }}">Karya</a></li>
                <li><a href="#" data-toggle="modal" data-target="#search"><i class="fa fa-search"></i></a></li>
                <li><a href="" data-toggle="modal" data-target="#search"><i class="menu-collapse lnr lnr-menu"></i></a></li>
                <li><a id="mdzaky-btn" href="{{ url('/contact') }}">Hubungi Kami</a></li>
            </ul>
        </nav>

        <!-- Modal -->
        <div class="modal fade" id="search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background-color: rgba(1,2,3,.3);">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="GET" action="{{ url('artikel/cari') }}">
                    <input class="form-control" placeholder="Cari disini" type="text" name="kata" autofocus="">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>

@yield('content')

<!-- Footer -->
<footer id="footer" class="bg-black sty1">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.8016281524297!2d105.33165421436074!3d-5.135619953382354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40bfacb379ac1b%3A0xb4981883d4515b75!2sCV.+Naistudio!5e0!3m2!1sen!2sid!4v1548679320575" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

            <div class="col-md-6 pl-5">
                <div class="row media">
                    <div class="d-flex mr-3"><i class="fa fa-phone"></i></div>
                    <div class="media-body">
                        <h6 class="mb-0 text-muted">Kontak</h6>
                        <span class="text-white">{{ $config->nomor }}</span>
                    </div>
                </div>

                <div class="row mt-5 media">
                    <div class="d-flex mr-3"><i class="fa fa-envelope"></i></div>
                    <div class="media-body">
                        <h6 class="mb-0 text-muted">Email</h6>
                        <span class="text-white"><a style="color: #fff;" href="mailto:{{ $config->email }}">{{ $config->email }}</a></span>
                    </div>
                </div>

                <div class="row mt-5 media">
                    <div class="d-flex mr-3"><i class="fa fa-map-pin"></i></div>
                    <div class="media-body">
                        <h6 class="mb-0 text-muted">Alamat</h6>
                        <span class="text-white">{{ $config->alamat }}</span>
                    </div>
                </div>

            </div>
        </div>
        <hr class="footer-hr my-0">
        <div class="dzaky-footer container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                        <img class="logo-footer" src="{{ url('') }}/assets/img/logowhite.png">
                    </div>
                </div>
                <div class="col-sm-12 text-center dzaky-footer-pd">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="kursus.html">Kursus</a></li>
                        <li><a href="testimoni.html">Testimoni</a></li>
                        <li><a href="artikel.html">Artikel</a></li>
                        <li><a href="alumni.html">Alumni</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="karya.html">Karya</a></li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <div class="text-center">
                        <p>Copyright &copy; <?php echo date('Y')?> <a style="color: yellow" href="http://naistudio.com">CV Naistudio</a>. make with <span>&hearts;</span> and <i class="fa fa-coffee"></i></p>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="text-center">
                        <div class="dzaky-sm">
                            <a href="http://facebook.com/naistudio.official"><i class="fa fa-facebook"></i></a>
                            <a href="http://twitter.com/hello_naistudio"><i class="fa fa-twitter"></i></a>
                            <a href="http://instagram.com/naistudio"><i class="fa fa-instagram"></i></a>
                            <a href="http://youtube.com/naistudio"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End lists -->
        </div>
    </div>
</footer>
<!-- End Section -->

<!-- JavaScript / FastLoad -->
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
<!-- Main JS -->
<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>