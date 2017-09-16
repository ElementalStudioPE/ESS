@extends('web.layouts.master')

@section('content')
<style>
	.mega-menu{
		background: #1b1b1b !important;
	}
	.hide-portafolio{
		display: none;
	}
	.more-projects{
		display: none;
	}
	@media screen and (min-width: 992px){
		.padding-top-100 {
		    padding-top: 10px !important;
		}
		#port-vis {
		    margin-left: 0px !important;
		    margin-top: 80px !important;
		}
	}
	@media screen and (max-width: 991px) and (min-width: 768px){
		#port-vis {
		    margin-left: 13px !important;
		}
	}
</style>
<div class="content-md paddding-top-28">
	<div class="container" style="position: relative;">
		<div class="lineas-ama1-port"></div>
		<div class="lineas-ama2-port"></div>
		<div class="lineas-ama3-port"></div>
	</div>
</div>
<div class="container content-md padding-top-100">
	<p class="portafolio responsive-home" id="port-vis">PORTAFOLIO</p>
	@include('web.modulos.portafolio')
</div>
@stop