@extends('site/master')

@section('title')
	{{$evento->Nome}}
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
                <h2>Evento - {{$evento->Nome}}</h2>
            </div>
            <div class="col-md-6 col-sm-6">
                <ul>
                    <li>
                        <a href="/"><i class="fa fa-home"></i>Home</a>
                    </li>
                    <li>
                        <a href="/evento/{{$evento->Id_Evento}}"><i class="fa fa-angle-right"></i>{{$evento->Nome}}</a>
                    </li>
                </ul>
            </div>
        </div>
        <!--ROW END-->
    </div>
</div>
<div class="kode-conference-schedule">
	<div class="container">
		<div class="kf_heading_1">
            <h2>{{$evento->Nome}}</h2>
            <span>Evento</span>
        </div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="schedule-banner">
					<img src="/site/assets/images/img05.jpg" alt="">
					<div class="scheduletabs">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
                            <?php $i = 1?>
                            @foreach($palestrasEvento as $key => $palestra)
				                <li role="presentation" class="{{$i === 1 ?'active' : ''}}"><a href="#dia_{{$i}}" role="tab" data-toggle="tab"><span>Dia {{$i}}</span>{{$key}}</a></li>
                                <?php $i++?>
                            @endforeach
						</ul>
						<!-- Tab panes -->
						<div class="tab-content">
                            <?php $i = 1?>
                            @foreach($palestrasEvento as $key => $palestras)
							<div role="tabpanel" class="tab-pane {{$i === 1 ?'active' : ''}}" id="dia_{{$i}}">
								@foreach($palestras as $j => $palestra)
                                    <div class="kf_new_con_wrap">
                                    	<div class="kf_new_conf_time">
                                        	<h5>{{$horas[$palestra->Hora]}}</h5>
                                        </div>
                                        <div class="kf_new_conf_des_wrap">
                                        	<div class="kf_new_conf_hdg" id="conf_accord">
                                                <h5>{{$palestra->Titulo}}</h5>
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                            <div class="kf_new_conf_open_wrap">
                                                <div class="kf_new_conf_des">
                                                    <p>{{$palestra->Descricao}}</p>
                                                </div>
                                            
                                                <div class="kf_new_conf_orgnizr">
                                                    <figure>
                                                        <img src="{{empty($palestra->palestrantes->first()) ? '/site/assets/images/img06.jpg' :$palestra->palestrantes->first()->Foto}}" alt="image Here">
                                                    </figure>
                                                    <div class="kf_new_conf_orgnizr_name">
                                                        <h6>{{empty($palestra->palestrantes->first()) ?'Não definido' :$palestra->palestrantes->first()->Nome}}</h6>
                                                        <span>Palestrante</span>
                                                    </div>
                                                </div>
                                            
                                                <div class="kf_new_conf_btn_link">
                                                    <a href="">{{$horas[$palestra->Hora]}}</a>
                                                    <a href="/palestra/confirmar-presenca/{{$palestra->Id_Palestra}}"><i class="fa fa-play"></i>Confirmar Presença</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
							</div>
                            <?php $i++?>
                            @endforeach 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Kode-Conference Schedule End -->

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