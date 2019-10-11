@extends('template')
@section('title')
	{{ $karya->nama_karya }}
@endsection
@section('content')
	<!-- Blog Content -->
	<section id="blog">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-12">
					<div class="blog-section">
						<article class="blog-item">
							<div style="padding: 0;" class="blog-content">
								<img src="{{ url('') }}/assets/img/karya/{{ $karya->gambar }}" style="width: 100%;">
							</div>
						</article>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="mdzaky-blog-sidebar">
						<div style="margin-top: 0px;" class="mdzaky-widget">
							<div class="mdzaky-widget-menu">
								<b>Nama Karya</b>
								<p>{{ $karya->nama_karya }}</p>
								<b>Pembuat</b>
								<p>{{ $karya->author }}</p>
								<b>Kategori</b>
								<p>{{ $karya->kategori->nama_kategori }}</p>
								<hr>
								<p>{!! $karya->deskripsi !!}</p>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</section>
	<!-- End Section -->
@endsection