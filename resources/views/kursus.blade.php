@extends('template')
@section('title')
	Kursus
@endsection
@section('content')
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

	<section id="question" style="margin-bottom: 100px">
		<div class="container">
			<div class="section-title">
				<p class="primary-text">Q & A</p>
				<p class="secondary-text">Beberapa pertanyaan umum</p>
			</div>
			<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>
		</div>
	</section>
@endsection