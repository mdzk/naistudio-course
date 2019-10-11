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
    <title>{{ $config->title }}</title>
    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/{{ $config->favicon }}">
    <!-- Keyword Description -->
    <meta content='{{ $config->description }}' name='description'/>
    <meta content='{{ $config->keyword }}' name='keywords'/>
</head>
<body>

<!-- Menu Navigasi -->
<div id="menu" class="">
    <div class="container">
        <div class="title"><a href="#banner"><img id="logo" src="assets/img/{{ $config->logo }}"></a></div>
        <nav id="nav">
            <ul>
                <li><a href="#banner">Home</a></li>
                <li><a href="#kursus">Paket Kursus</a></li>
                <li><a href="#testimoni">Testimoni</a></li>
                <li><a href="#artikel">Artikel</a></li>
                <li><a href="#alumni">Alumni</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#karya">Karya</a></li>
                <li><a href="" data-toggle="modal" data-target="#search"><i class="fa fa-search"></i></a></li>
                <li><a href="" data-toggle="modal" data-target="#search"><i class="menu-collapse lnr lnr-menu"></i></a></li>
                <li><a id="mdzaky-btn" href="{{ url('contact') }}">Hubungi Kami</a></li>
            </ul>
        </nav>

        <!-- Modal -->
        <div class="modal fade" id="search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background-color: rgba(1,2,3,.3);">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="GET" action="{{ url('/artikel/cari') }}">
                        <input class="form-control" placeholder="Cari disini" type="text" name="kata" autofocus="">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>

<!-- Banner -->
<section id="banner">
    <div class="container">
        <div class="left-banner">
            <p>WE'RE NAISTUDIO</p>
            <p>YUK! GABUNG<br>BERSAMA KAMI</p>
            <hr>
            <div class="clearfix">	</div>
            <p class="left-banner-text">Kami akan membimbing dengan sepenuh hati</p>
            <a class="btn-gradient" href="{{ url('kursus') }}">Info Lengkap</a>
        </div>
    </div>
    <div class="right-banner">
        <img src="{{ url('') }}/assets/img/bg2.png">
        <img src="{{ url('') }}/assets/img/bg.png">
    </div>
    <div class="clearfix"></div>
</section>
<!-- End Section -->

<!-- Kursus -->
<section id="kursus">
    <div class="container">
        <div class="section-title">
            <p class="primary-text">Paket Kursus</p>
            <p class="secondary-text">Beberapa paket yang naistudio berikan</p>
        </div>
        <div class="kursus-content">
            <a href="{{ url('desain') }}" class="kursus-content-1">
                <p class="lnr lnr-picture"></p>
                <p>Desain Grafis</p>
                <p>Apapun yang dibutuhkan client kami siap membuatnya. Dijamin hasil akan sesuai dengan yang client inginkan.</p>
                <p class="lnr lnr-chevron-right-circle"></p>
            </a>
            <a href="{{ url('web') }}" class="kursus-content-1">
                <p class="lnr lnr-code"></p>
                <p>Web <span>Desain & Programming</span></p>
                <p>Apapun yang dibutuhkan client kami siap membuatnya. Dijamin hasil akan sesuai dengan yang client inginkan.</p>
                <p class="lnr lnr-chevron-right-circle"></p>
            </a>
            <a href="{{ url('administrasi') }}" class="kursus-content-1">
                <p class="lnr lnr-briefcase"></p>
                <p>Administrasi <span>Perkantoran</span></p>
                <p>Apapun yang dibutuhkan client kami siap membuatnya. Dijamin hasil akan sesuai dengan yang client inginkan.</p>
                <p class="lnr lnr-chevron-right-circle"></p>
            </a>
            <a href="{{ url('android') }}" style="margin-right: 0px" class="kursus-content-1">
                <p class="lnr lnr-tablet"></p>
                <p><span>Aplikasi</span> Android</p>
                <p>Apapun yang dibutuhkan client kami siap membuatnya. Dijamin hasil akan sesuai dengan yang client inginkan.</p>
                <p class="lnr lnr-chevron-right-circle"></p>
            </a>
        </div>
        <div class="clearfix"></div>
    </div>
</section>
<!-- End Section -->

<!-- Testimoni -->
<section id="testimoni">
    <div class="container">
        <div id="testi" class="carousel slide">
            <div class="section-title">
                <p class="secondary-text" style="margin-bottom: 0px">Testimoni</p>
                <p class="primary-text" style="margin-bottom: 34px;">Apa kata mereka?</p>
            </div>
            <div class="carousel-inner">
                @foreach($testimoni as $t)
                <div class="carousel-item active">
                    <center class="avatar">
                        <img src="assets/img/alumni/{{ $t->gambar }}">
                        <p class="text-avatar" style="padding: 0 90px">
                            {{ $t->pesan }}
                        </p>
                        <p class="avatar-name" style="margin-top: 50px; margin-bottom: 0px;">{{ $t->nama }}</p>
                        <p class="text-avatar" style="color: #566add">{{ $t->status }}</p>
                    </center>
                </div>
                @endforeach
                @foreach($testimoni2 as $t)
                <div class="carousel-item">
                    <center class="avatar">
                        <img src="assets/img/alumni/{{ $t->gambar }}">
                        <p class="text-avatar" style="padding: 0 90px">
                            {{ $t->pesan }}
                        </p>
                        <p class="avatar-name" style="margin-top: 50px; margin-bottom: 0px;">{{ $t->nama }}</p>
                        <p class="text-avatar" style="color: #566add">{{ $t->status }}</p>
                    </center>
                </div>
                @endforeach
            </div>

            <a class="carousel-control-prev" href="#testi" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#testi" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
</section>
<!-- End Section -->

<!-- Artikel -->
<section id="artikel">
    <div class="container">

        <div class="section-title">
            <p class="secondary-text" style="margin-bottom: 0px">Artikel</p>
            <p class="primary-text" style="margin-bottom: 34px;">Artikel Terbaru</p>
        </div>

        <div class="artikel">
            @foreach($artikel1 as $a1)
            <a href="{{ url('artikel/' . $a1->id . '/' . str_slug($a1->judul, '-')) }}">
                <div style="background-image: linear-gradient(rgba(0,0,0,0.0), rgba(0,0,0,0.4)),url('{{ url('') }}/assets/img/thumb/{{ $a1->gambar }}');" class="artikel-content primary">
                    <div class="artikel-title">
                        <i class="ion-android-time"></i>{{ $a1->tanggal }}
                        <p>{{ $a1->judul }}</p>
                    </div>
                </div>
            </a>
            @endforeach
            @foreach($artikel2 as $a2)
            <a href="{{ url('artikel/' . $a2->id . '/' . str_slug($a2->judul, '-')) }}">
                <div style="background-image: linear-gradient(rgba(0,0,0,0.0), rgba(0,0,0,0.4)),url('{{ url('') }}/assets/img/thumb/{{ $a2->gambar }}');" class="artikel-content secondary">
                    <div class="artikel-title">
                        <i class="ion-android-time"></i>{{ $a2->tanggal }}
                        <p>{{ $a2->judul }}</p>
                    </div>
                </div>
            </a>
            @endforeach
            @foreach($artikel3 as $a3)
            <a href="{{ url('artikel/' . $a3->id . '/' . str_slug($a3->judul, '-')) }}">
                <div style="background-image: linear-gradient(rgba(0,0,0,0.0), rgba(0,0,0,0.4)),url('{{ url('') }}/assets/img/thumb/{{ $a3->gambar }}');" class="artikel-content third">
                    <div class="artikel-title">
                        <i class="ion-android-time"></i>{{ $a3->tanggal }}
                        <p>{{ $a3->judul }}</p>
                    </div>
                </div>
            </a>
            @endforeach
            <div class="clearfix"></div>
        </div>
    </div>
    <a style="margin-top: 0px;" class="btn-gradient" href="{{ url('artikel') }}">Lebih Banyak</a>
</section>
<!-- End Artikel -->

<!-- Alumni -->
<section id="alumni">
    <div class="container">
        <div class="section-title">
            <p class="primary-text" style="text-align: left;">Alumni</p>
            <p class="secondary-text" style="margin-bottom: 0;float: left;">Daftar alumni yang mengikuti kursus</p>
            <p class="secondary-text" style="margin-bottom: 0;font-weight: bold;color: #523ee8;text-align: right;"><a style="font-size: 14px;" class="btn btn-lg btn-outline-primary" href="{{ url('alumni') }}">Lihat Semua Alumni</a></p>
        </div>
        <div class="clearfix"></div>
        <div class="owl-carousel alumni">
            @foreach($alumni as $a)
            <div class="alumni-content">
                <p align="center"><img src="assets/img/alumni/{{ $a->gambar }}"></p>
                {{--<p align="center" style="--}}
                        {{--background-image: url('assets/img/alumni/{{ $a->gambar }}');--}}
                        {{--width: 127px;--}}
                        {{--height: 127px;--}}
                        {{--background-position: center;--}}
                        {{--background-size: cover;--}}
                        {{--border-radius: 50%;--}}
                        {{--">--}}
                {{--</p>--}}
                <p>{{ $a->nama }}</p>
                <p>{{ $a->status }}</p>
            </div>
            @endforeach
        </div>
        <div class="clearfix"></div>
    </div>
</section>
<!-- End Section -->

<!-- Gallery -->
<section id="gallery">
    <div class="container">
        <div class="section-title">
            <p class="secondary-text" style="margin-bottom: 0;text-align: left;">Gallery</p>
            <p class="primary-text" style="float: left;">Foto Kegiatan</p>
            <p class="secondary-text" style="margin-bottom: 0;font-weight: bold;color: #523ee8;text-align: right;"><a style="font-size: 14px;" class="btn btn-lg btn-outline-primary" href="{{ url('gallery') }}">Lihat Semua</a></p>
        </div>
        <div class="clearfix"></div>
        <div class="gallery">

            <div class="left-gallery">
                @foreach($gallery as $g)
                <div class="gallery-content" style="background-image: url('{{ url('') }}/assets/img/gallery/{{ $g->gambar }}');"></div>
                @endforeach
            </div>

            @foreach($galleryp as $g)
            <div class="right-gallery">
                <div class="gallery-content-primary" style="background-image: url('{{ url('') }}/assets/img/gallery/{{ $g->gambar }}');"></div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="clearfix"></div>
</section>
<!-- End Sectionn -->

<!-- Karya -->
<section id="karya">
    <div class="container">
        <div class="left-karya">
            <p class="karya-title">Dapat Memiliki<br>Karya Sendiri</p>
            <p>This is Photoshop's version  of Lorem Ipsum.
                Proin gravida nibh vel velit auctor aliquet. <br><br>

                Aenean sollicitudin, lorem quis bibendum
                auctor, nisi elit consequat ipsum, nec sagittis
                sem nibh id elit. Duis sed odio sit amet nibh
                vulputate cursus a sit amet mauris. </p>
            <a href="{{ url('karya') }}" class="btn btn-primary">Karya Lainnya</a>
        </div>
        <div class="right-karya">
            <img src="assets/img/triangle.png">
            <img src="assets/img/apple.png">
        </div>
    </div>
    <div class="clearfix"></div>
</section>
<!-- End Section -->

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
                        <img class="logo-footer" src="assets/img/logowhite.png">
                    </div>
                </div>
                <div class="col-sm-12 text-center dzaky-footer-pd">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('kursus') }}">Kursus</a></li>
                        <li><a href="{{ url('testimoni') }}">testimoni</a></li>
                        <li><a href="{{ url('artikel') }}">Artikel</a></li>
                        <li><a href="{{ url('alumni') }}">Alumni</a></li>
                        <li><a href="{{ url('gallery') }}">Gallery</a></li>
                        <li><a href="{{ url('karya') }}">Karya</a></li>
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
<!-- Main JS -->
<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>