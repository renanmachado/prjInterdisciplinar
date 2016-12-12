@extends('site/master')

@section('title')
	Confirmar Presença
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
            <li class=""><a href="">Certificados</a>
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
                <h2>Confirmar Presença - {{$palestra->Titulo}}</h2>
            </div>
            <div class="col-md-6 col-sm-6">
                <ul>
                    <li>
                        <a href="/"><i class="fa fa-home"></i>Home</a>
                    </li>
                    <li>
                        <a href="/palestra/confirmar-presenca/{{$palestra->Id_Palestra}}"><i class="fa fa-angle-right"></i>Confirmar Presença - {{$palestra->Titulo}}</a>
                    </li>
                </ul>
            </div>
        </div>
        <!--ROW END-->
    </div>
</div>
<div class="kode-blog-style-2">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="kode-contact-heading">
                <h4>Confirmar Presença</h4>
                <span class="border-left"></span>
            </div>
            <div class="kode-contact-area col-md-12">
                {!! Form::open(array('url' => '/palestra/confirmar-presenca/salvar', 'class' => 'comments-form row', 'method' => 'post')) !!}
                    {!! Form::hidden('Id_Palestra', $palestra->Id_Palestra) !!}
                     <div class="hidden-me" id="contact_form_responce">
                        <p class="error type-2"> 
                            @if (isset($msgs) && !empty($msgs))
                                @foreach($msgs as $msg)
                                    {{$msg}}<br>
                                @endforeach
                            @endif
                        </p>
                     </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <input type="text" id="RA" name="RA" class="required" placeholder="RA">
                        </div>
                        
                    </div>
                    <button class="thbg-color" value="Send Reply">Confirmar</button>
                {!! Form::close() !!}                       
            </div>
        </div>
    </div>
</div>
</div>
@stop

@section('scripts')
@stop