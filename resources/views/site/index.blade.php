@extends('site/master')

@section('title')
	Home
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
            <li class="active"><a href="/">Home</a>
            <li><a href="">Palestrantes</a>
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
                <h2>Listagem de eventos</h2>
            </div>
            <div class="col-md-6 col-sm-6">
                <ul>
                    <li>
                        <a href="/"><i class="fa fa-home"></i>Home</a>
                    </li>
                </ul>
            </div>
        </div>
        <!--ROW END-->
    </div>
</div>
<!--Kode-our-speaker-heading End-->
<!--KODE-EVENT-SHEDULE START-->	
<div class="kode-blog-style-2">
	<div class="container">
		@foreach($eventos as $key => $value)
			@if($cont == 0)
			<div class="row">
			@endif
				<div class="col-md-4">
					<div class="kode-event-blog3">
						<figure>
							<img src="{{$value->Imagem}}" alt=""/>
							<div class="kode-fig-capstion">
								<a href="#">{{$value->Nome}}</a>
								<p>Evento</p>
							</div>
						</figure>
						<div class="kode-thumb-caption">
							<h4>{{$value->Nome}}</h4>
							<ul>
								<li><a href="/evento/{{$value->Id_Evento}}"><i class="fa fa-calendar"></i>{{date('d/m/Y', strtotime($value->Dt_Inicial_Execucao))}}</a></li>
								<li><a href="/evento/{{$value->Id_Evento}}"><i class="fa fa-location-arrow"></i>Participe</a></li>
							</ul>
							<span><a href="/evento/{{$value->Id_Evento}}">Leia mais</a></span>
						</div>
					</div>
				</div>
			<?php $cont++;?>	
			@if($cont == 3)
			<?php $cont = 0;?>
			</div>
			@endif
		@endforeach
		<!--PAGINATION ROW END-->
		@if ($eventos->lastPage() > 1)
		<div class="row">
			<div class="col-md-12">
				<!---PAGINATIOn START-->
				<div class="pag">
					<ul class="pagination">
						<li class="{{ ($eventos->currentPage() == 1) ? ' disabled' : '' }}">
						  <a href="{{ $eventos->url(1) }}" aria-label="Previous">
							<span aria-hidden="true">Prev</span>
						  </a>
						</li>
						@for ($i = 1; $i <= $eventos->lastPage(); $i++)
					        <li class="{{ ($eventos->currentPage() == $i) ? ' active' : '' }}">
					            <a href="{{ $eventos->url($i) }}">{{ $i }}</a>
					        </li>
					    @endfor
						<li class="{{ ($eventos->currentPage() == $eventos->lastPage()) ? ' disabled' : '' }}">
						  <a href="{{ $eventos->url($eventos->currentPage()+1) }}" aria-label="Next">
							<span aria-hidden="true">Next</span>
						  </a>
						</li>
					</ul>
				</div>
				<!--PAGINATION END-->
			</div>
		</div>
		@endif
	</div>
</div>
<!--KODE-EVENT-SHEDULE END-->	
</div>
@stop

@section('scripts')
@stop