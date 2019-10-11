@extends('template')
@section('title')
    Kontak Kami
@endsection
@section('content')
    <section id="contact" style="padding: 100px 0px">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5 mb-5">
                    <p class="text-center"><img width="200" src="assets/img/{{ $config->logo }}"></p>
                </div>
                <div class="col-md-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.8016281524297!2d105.33165421436074!3d-5.135619953382354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40bfacb379ac1b%3A0xb4981883d4515b75!2sCV.+Naistudio!5e0!3m2!1sen!2sid!4v1548679320575" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-md-12 mt-5 mb-5 kontak">
                    <div class="row">
                        <div class="col-md-6 text-center p-10">
                            <p><i class="fa fa-phone" style="margin-right: 20px;"></i>Phone<br> {{ $config->nomor }}</p>
                        </div>
                        <div class="col-md-6 text-center">
                            <p><i class="fa fa-envelope" style="margin-right: 20px;"></i>Email<br> {{ $config->email }}</p>
                        </div>
                        <div class="col-md-12 text-center">
                            <p><i class="fa fa-map-pin" style="margin-right: 20px;"></i>Alamat<br> {{ $config->alamat }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection