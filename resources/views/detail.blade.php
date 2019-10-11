@extends('template')
@section('title')
	{{ $artikel->judul }}
@endsection
@section('content')
	<!-- Blog Content -->
	<section id="blog">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-12">
					<div class="blog-section">
						<article class="blog-item">
							<a href="" class="blog-img" style="background-image: url('{{ url('') }}/assets/img/thumb/{{ $artikel->gambar }}');"></a>
							<div class="blog-content">
								<span class="blog-date">
									<i class="fa fa-user"></i>{{ @$artikel->users->name }}
									<i class="fa fa-calendar"></i>{{ $artikel->tanggal }}
									<i class="fa fa-tag"></i>{{ @$artikel->kategori->nama_kategori }}
									<i class="fa fa-eye"></i>{{ $artikel->dibaca }}
								</span>
								<h2 style="color: #566add; margin-bottom: 30px;">{{ $artikel->judul }}</h2>
								<p>{!! $artikel->isi  !!}</p>
								<div class="blog-profile">
									<img src="{{ url('') }}/assets/img/user/{{ $artikel->users->gambar }}">
									<a href="">{{ $artikel->users->name }}</a>
									<p>" {{ $artikel->users->bio }}. "</p>
									<div class="clearfix"></div>
								</div>
							</div>
						</article>
					</div>
				</div>
				<div class="col-md-3 col-lg-3 col-sm-12">
					<div class="mdzaky-blog-sidebar">
						<div style="margin-top: 0px;" class="mdzaky-widget">
							<h2>Kategori</h2>
							<div class="mdzaky-widget-menu">
								<ul>
									@foreach($kategori as $k)
										<li><a href="{{ url('kategori/' . $k->id . '/' . str_slug($k->nama_kategori, '-')) }}"><span>{{ $k->nama_kategori }}<i class="fa fa-angle-right"></i></span></a></li>
									@endforeach
								</ul>
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