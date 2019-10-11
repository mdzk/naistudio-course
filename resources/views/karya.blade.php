@extends('template')
@section('title')
	Karya
@endsection
@section('content')
	<!-- Karya -->
	<section id="karyaBlog">
		<div class="container">
			<div class="row">
				<div id="filters" class="button-group col-md-12 text-center">
					<button class="button btn btn-outline-primary is-checked" data-filter="*">All</button>
					@foreach($kategori as $k)
						<button class="button btn btn-outline-primary" data-filter=".{{ str_slug($k->nama_kategori, '-') }}">{{ $k->nama_kategori }}</button>
					@endforeach
				</div>
			</div>
			<div class="grid row">

				@foreach($karya as $k)

				<div class="element-item col-md-3 {{ str_slug($k->kategori->nama_kategori, '-') }} karya-content" data-category="{{ str_slug($k->kategori->nama_kategori, '-') }}">
					<div class="karya-item">
						<div class="thumb-karya" style="background-image: url('{{ url('') }}/assets/img/karya/{{ $k->gambar }}')!important;"></div>
						<div class="karya-text">
							<p style="margin: 0;">{{ $k->nama_karya  }}</p>
							<p>{{ $k->author }}</p>
							<hr>
							<span><i style="color: red; margin-left: 3px" class="fa fa-heart"></i>&nbsp;{{ $k->love }}</span>
							<span><i style=" margin-left: 15px" class="fa fa-eye"></i>&nbsp;{{ $k->view }}</span>
						</div>
						<div class="middle">
							<a href="{{ url('/karya/' . $k->id . '/' . str_slug($k->nama_karya, '-')) }}"><div class="text btn-gradient">Lihat</div></a>
						</div>
					</div>
				</div>

				@endforeach

			</div>
		</div>
		<div class="clearfix"></div>
	</section>
	<!-- End Section -->
@endsection