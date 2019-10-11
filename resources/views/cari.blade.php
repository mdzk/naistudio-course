@extends('template')
@section('title')
	Artikel
@endsection
@section('content')
	<!-- Blog Content -->
	<section id="blog">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-12">
					<div class="blog-section">
						<h3>Total <b>{{ count($artikel) }}</b> ditemukan, pencarian dari kata <b>{{ $_GET['kata'] }}</b></h3>
						<br>
						@foreach ( $artikel as $a)
						<article class="blog-item">
							<a href="{{ url("artikel/" . $a->id . '/' . str_slug($a->judul, '-')) }}" class="blog-img" style="background-image: url('{{ url('') }}/assets/img/thumb/{{ $a->gambar }}');"></a>
							<div class="blog-content">
								<span class="blog-date">
									<i class="fa fa-user"></i>{{ @$a->users->name }}
									<i class="fa fa-calendar"></i>{{ $a->tanggal }}
									<i class="fa fa-tag"></i>{{ @$a->kategori->nama_kategori }}
								</span>
								<a href="{{ url("artikel/" . $a->id . '/' . str_slug($a->judul, '-')) }}"><h2>{{ $a->judul }}</h2></a>
								<p>{!! substr(trim(strip_tags($a->isi)), 0,300) !!}</p>
							</div>
						</article>
						@endforeach
						{{ $artikel->links() }}
					</div>
				</div>
				<div class="col-md-4 col-lg-4 col-sm-12">
					<div class="mdzaky-blog-sidebar">
						<div style="margin-top: 0px;" class="mdzaky-widget recent-post">
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