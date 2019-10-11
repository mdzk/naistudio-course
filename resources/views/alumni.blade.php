@extends('template')
@section('title')
	Alumni
@endsection
@section('content')
<!-- Alumni -->
	<section id="alumni" style="padding: 150px 0; background-position: 10% 50%;">
		<div class="container">
			<h1 class="text-center mb-5">Alumni Kursus Naistudio</h1>
			<table class="table">
				<tr>
					<th>#</th>
					<th>Nama</th>
					<th>Status</th>
				</tr>
				<?php
					$i = 1;
					foreach ($alumni as $a) {
				?>
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{ $a->nama }}</td>
					<td>{{ $a->status }}</td>
				</tr>
				<?php } ?>
			</table>
			{{ $alumni->links() }}
		</div>
	</section>
	<!-- End Section -->
@endsection