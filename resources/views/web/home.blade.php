@extends('web.layouts.master')

@section('content')
<style type="text/css">
	body .interactive-slider-v2.img-v3#inicio {
	    background: url("{{asset('storage/'.$generales->inicio_background)}}") no-repeat !important;
	    background-size: cover !important;
	    background-position: center center !important;
	}
</style>

<div class="interactive-slider-v2 interactive-slider-v2-md img-v3" id="inicio" style="height: 100vh !important;">
	<div class="container" id="text-mid-c">
		<p class="letra">{!! $generales->inicio_mensaje !!}</p>
	</div>
</div>

<div class="container content-md" style="position:relative;">
	<p class="quienes-somos">QUIÉNES SOMOS</p>
	<div style="position:absolute;" class="scroll-down" id="inicio">
		<p class="page-scroll scroll-down-style">
		<a href="#quienes-somos" id="quienes-somos">  <span>SCROLL </span><i class="fa fa-angle-down style-icon" aria-hidden="true" style="background: transparent !important;"></i> <span>DOWN </span> </a>
		</p>
	</div>
	<div class="lineas-ama1" id="left-home1"></div>
	<div class="lineas-ama2" id="left-home2"></div>
	<div class="lineas-ama3" id="left-home3"></div>
	<div class="row top-top-cd">
		<div class="col-md-6 overflow-h">
		    @if($generales->quienessomos_imagen != '')
			<img class="img-responsive wow animated fadeInUp responsive-img-mobile" data-wow-duration="1.5s" src="{{asset('storage/'.$generales->quienessomos_imagen)}}" alt="" style="padding-left: 58px;">
			@endif
		</div>
		<div class="col-md-6 md-margin-bottom-40 text-edit">
			<h2 class="title-v2">{!! $generales->quienessomos_titulo !!}</h2>
			<br>
			<p class="negro">{!! $generales->quienessomos_descripcion !!}</p>
			<br><br>
			<div class="center-a">
			<a href="#" class="btn-u btn-brd btn-brd-hover btn-u-dark subb">NUESTRO EQUIPO</a>
			</div>
		</div>
	</div>
</div>


<div class="parallax-counter-v1 parallaxBg dis-none">
	<div class="container">
		{!! $generales->intermedio_titulo !!}
	</div>
</div>
<div class="container" style="position:relative;">
	<p class="que-hacemos">QUÉ HACEMOS</p>
</div>

@include('web.modulos.servicios')

@include('web.modulos.portafolio')

@include('web.modulos.clientes')

@stop
