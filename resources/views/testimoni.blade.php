@extends('template')
@section('title')
	Testimoni
@endsection
@section('content')
	<!-- Testimoni -->
	<section id="testimoni">
		<div class="container">
			<div id="testi" class="carousel slide">
				<div class="section-title">
					<p class="secondary-text" style="margin-bottom: 0px">Testimoni</p>
					<p class="primary-text" style="margin-bottom: 34px;">Apa kata mereka?</p>
				</div>
				<div class="carousel-inner">

					<div class="carousel-item active">
						<center class="avatar">
							<img src="assets/img/avatar.png">
							<p class="text-avatar" style="padding: 0 90px">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<p class="avatar-name" style="margin-top: 50px; margin-bottom: 0px;">Kimi Chan</p>
							<p class="text-avatar" style="color: #566add">Student</p>
						</center>
					</div>
					<div class="carousel-item">
						<center class="avatar">
							<img src="assets/img/avatar.png">
							<p class="text-avatar" style="padding: 0 90px">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<p class="avatar-name" style="margin-top: 50px; margin-bottom: 0px;">Kimi Chan</p>
							<p class="text-avatar" style="color: #566add">Student</p>
						</center>
					</div>
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
@endsection