@extends('site/master')

@section('title')
	Palestrantes
@stop

@section('styles')
@stop

@section('content')
<div id="mobile-header">
    <a id="responsive-menu-button" href="#sidr-main"><i class="fa fa-bars"></i></a>
</div>
<header id="kode-header">
    <strong class="kode-logo">
        <a href="/"><img src="/site/assets/images/qi.png" alt=""></a>
    </strong>
    <nav class="kode-nav" id="navigation">
        <ul>
            <li class=""><a href="/">Home</a>
            <li class="active"><a href="">Palestrantes</a>
                <ul>
                    <li><a href="/palestrantes">Nossos Palestrantes</a></li>
                </ul>
            </li>
            <li><a href="">Certificados</a>
                <ul>
                    <li><a href="/palestra/solicitar-certificado">Solicitar Certificado</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div class="col-right">
        <ul class="header-social">
            <!--<li><a href="#" data-toggle="tooltip" title="Facebook" data-placement="bottom"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" data-toggle="tooltip" title="Twitter" data-placement="bottom"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" data-toggle="tooltip" title="Linkedin" data-placement="bottom"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#" data-toggle="tooltip" title="Google Plus" data-placement="bottom"><i class="fa fa-google-plus"></i></a></li> -->
        </ul>
        <a href="/admin" target="_blank" class="button-member">ADMIN</a>
    </div>
</header>
<div class="content">
    <!-- Kode-Header End -->
    <div class="sub-header">
        <!-- SUB HEADER -->
    </div>
    <!-- Kode-Slider End -->
    <!--Kode-our-speaker-heading start-->
    <div class="Kode-page-heading">
    <div class="container">
        <!--ROW START-->
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <h2>Nossos palestrantes</h2>
            </div>
            <div class="col-md-6 col-sm-6">
                <ul>
                    <li>
                        <a href="/"><i class="fa fa-home"></i>Home</a>
                    </li>
                    <li>
                        <a href="/palestrantes"><i class="fa fa-angle-right"></i>Palestrantes</a>
                    </li>
                </ul>
            </div>
        </div>
        <!--ROW END-->
    </div>
</div>

<div class="kode-speaker-frame">
	<div class="container">
		<div class="kf_heading_1">
            <h2>Nossos Palestrantes</h2>
            <span>Palestrantes</span>
        </div>
		<div class="row">
			<div id="kode-speaker-causel" class="owl-carousel">
                @foreach($palestrantes as $palestrante)
				<div class="kode-newspeaker">
					<div class="speaker-photo">
						<img src="{{$palestrante->Foto}}" alt="">
					</div>
					<div class="new-ourspeaker">
						<h3>{{$palestrante->Nome}} / <span>Palestrante</span></h3>
						{{-- <ul class="newpseaker-media">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
							<li><a href="#"><i class="fa fa-life-ring"></i></a></li>
						</ul> --}}
					</div>
					<div class="new-ourspeaker over-state">
						<h3>{{$palestrante->Nome}} / <span>Palestrante</span></h3>
						<p>{{$palestrante->Minicurriculo}}</p>
						<ul class="newpseaker-media">
							{{-- <li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
							<li><a href="#"><i class="fa fa-life-ring"></i></a></li> --}}
						</ul>
					</div>
					<!-- kode-new speaker over state End -->
				</div>
                @endforeach    
			</div>
		</div>
	</div>
</div>
@stop

@section('scripts')
@stop