@extends('site/master')

@section('title')
	Certificado
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
            <li class="active"><a href="">Certificados</a>
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
                <h2>Certificado</h2>
            </div>
            <div class="col-md-6 col-sm-6">
                <ul>
                    <li>
                        <a href="/"><i class="fa fa-home"></i>Home</a>
                    </li>
                    <li>
                        <a href="/palestra/solicitar-certificado"><i class="fa fa-angle-right"></i>Certificado</a>
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
                <h4>Solicita certificado</h4>
                <span class="border-left"></span>
            </div>
            <div class="kode-contact-area col-md-12">
                <form method="post" class="comments-form row" id="contactform">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <input type="text" id="RA" name="RA" class="required" placeholder="Name">
                        </div>
                        
                    </div>
                    <button class="thbg-color" value="Send Reply">Submit Now</button>
                </form>                         
            </div>
        </div>
    </div>
</div>
</div>
@stop

@section('scripts')
@stop