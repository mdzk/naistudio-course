<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <title>Login | {{ $config->title }}</title>
  <link rel="stylesheet" type="text/css" href="">
  <link rel="icon" href="{{ url('') }}/assets/img/{{ $config->favicon }}" type="image/ico" />
  <link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/css/style.css">
</head>
<body>

<section id="wrapper" class="container-fluid row">
  <div class="feature-login col-lg-4 col-md-4">
    <div class="wrap-fit overlay">
      <div class="logo-login-page">
        <img src="assets/img/logowhite.png">
      </div>
      <div class="text-feature-login text-white">
        <b  style="font-size: 18px">Ayo Kursus di Naistudio</b>
        <br>
        <p>Kursus merupakan salah satu produk naistudio yang sangat di gemari, pengajar dari kursus merupakan pengajar yang sudah berpengalaman dibidangnya. Untuk detail kursus bisa dibuka pada menu kursus.</p>
        <a class="btn btn-singup-outline-wh btn-sm font-m-normal text-white" href="">Daftar Sekarang</a>
      </div>
    </div>
  </div>
  <div class="row col-lg-8 col-md-12">
    <div class="col-xl-offset-3 col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-sm-5 col-xs-12">
      <div class="mar_top4"></div>
      <p align="center">
        <img class="logo-login" style="display: none;" src="assets/img/{{ $config->logo }}">
      </p>
      <h3 class="font-m-light">Login Area</h3>
      <div class="mar_top2"></div>
      <form  method="POST" action="{{ url('/login') }}">
        @csrf
        <div class="form-group">
          <label class="control-label" for="reg-email">Username</label>
          <input ype="text" name="username" class="form-control" placeholder="Masukkan Username" required="" />
        </div>
        <div class="form-group">
          <label class="control-label" for="reg-email">Password</label>
          <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required="" />
        </div>
        <div class="form-group">
          <input class="btn btn-basic-sm btn-basic-blue" type="submit" name="submit" value="Login">
        </div>
      </form>
      <div class="mar_top2" style="border-bottom: 1px solid #dbdbdb;"></div>
    </div>
  </div>
</section>

</body>
</html>