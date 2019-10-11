@extends('template')
@section('title')
	Gallery
@endsection
@section('content')
	<!-- Gallery -->
	<section id="gallery" style="background-position: 40% 20%;background-image: none;">
		<div class="container">
			<div class="section-title">
				<p class="secondary-text" style="margin-bottom: 0;text-align: left;">Gallery</p>
				<p class="primary-text" style="float: left;">Foto Kegiatan</p>
			</div>
			<div class="clearfix"></div>
			<div class="row">
				@foreach($gambar as $g)
				<div class="col-md-3">
					<img class="gambar" src="{{ url('')}}/assets/img/gallery/{{ $g->gambar }}" alt="">
				</div>
				@endforeach
			</div>
		</div>
		<div class="clearfix"></div>
	</section>
	<!-- End Sectionn -->
@endsection