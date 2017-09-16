@extends('layouts.master')

@section('content')


<div class="interactive-slider-v2 interactive-slider-v2-md img-v66" style="padding: 200px 0;">
	<div class="container">
		<p class="letra" style="text-align: left;"><b>{{ $portafolio->nombre }}</b></p>
		<p class="titulo-bot" style="text-align: left;">{{ $portafolio->descripcion_previa }}</p>
	</div>
</div>

<div class="container content-md" style="position: relative">
<div class="lineas-ama1" id="left-yellow1"></div>
<div class="lineas-ama2" id="left-yellow2"></div>
<div class="lineas-ama3" id="left-yellow3"></div>

	<p class="portafolio portafolio-port">PORTAFOLIO</p>
	
	<div class="row padding-bot-">
		<div class="col-md-12 overflow-h">
			<img class="img-responsive wow animated fadeInUp" data-wow-duration="1.5s" src="{{asset('storage/'.$portafolio->imagen)}}" alt="" style="width:100%;">
		</div>
	</div>

	<div class="row">
		<div class="col-md-12 md-margin-bottom-40">
			<p class="" style="color: black;font-size: 17px;">{{ $portafolio->descripcion }}
			</p>
		</div>
	</div>
	
	<div class="row padding-bot--">
		<div class="col-md-6 overflow-h">
			<img class="img-responsive wow animated fadeInUp" data-wow-duration="1.5s" src="{{asset('img/img03.png')}}" alt="" style="width: 100%;">
		</div>
		<div class="col-md-6 md-margin-bottom-40">
			<img class="img-responsive wow animated fadeInUp" data-wow-duration="1.5s" src="{{asset('img/img04.png')}}" alt="" style="width: 100%;">
		</div>
	</div>
</div>


@stop