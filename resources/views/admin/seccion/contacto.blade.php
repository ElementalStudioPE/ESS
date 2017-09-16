@extends('admin.layouts.master')


@section('content')
<div class='col-xs-12 col-sm-12 col-md-12 agregar' >
	<div class="">
		<h2 class="titulo-seccion">Contacto</h2>
	</div>
</div>
<div class='col-xs-12 col-sm-6 col-md-8 agregar' >
	<div class="panel">
		<div class="panel-content">
			<h4>Código Izquierda</h4>
			<div id="summernote">
				<p class="contacto">CONTACTO</p>
            <p class="form-w">¿Listo para empezar un <br>NUEVO PROYECTO?
            </p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d975.2059126436538!2d-76.98460907081952!3d-12.124215599463476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c78ba3f7888f%3A0x83ec61736f438aa0!2sElemental+Studio+ESS!5e0!3m2!1ses-419!2spe!4v1495474992719" width="600" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
			</div>
		</div>
	</div>
	<div class="panel">
		<div class="panel-content">
			<h4>Texto Footer</h4>
			<div id="summernote-2">
				<div class="row">
	<div class="col-md-3 col-sm-12 padding-bot-12">
		<p class="footer-text-w">CONTÁCTANOS</p>
		<p class="footer-text-y">contacto@ess.pe<br>(+511) 220 4109</p>
	</div>
	<div class="col-md-3 col-sm-12 padding-bot-12">
		<p class="footer-text-w">COMERCIAL</p>
		<p class="footer-text-y">jsilva@ess.pe </p>
	</div>
	<div class="col-md-3 col-sm-12 padding-bot-12">
		<p class="footer-text-w">TRABAJA CON NOSOTROS</p>
		<p class="footer-text-y">jsantamaria@ess.pe</p>
	</div>
	<div class="col-md-3 col-sm-12 padding-bot-12">
		<p class="footer-text-w">DIRECCIÓN</p>
		<p class="footer-text-y">Av. Caminos del inca 1423,<br>Dpto 302, Santiago de Surco </p>
	</div>
</div>
			</div>
		</div>
	</div>
</div>
<div class='col-xs-12 col-sm-6 col-md-4 agregar' >
	<div class="panel">
		<div class="panel-content">
			<div class="imagen-box">
				<div class="imagen-titulo">IMAGEN PRINCIPAL</div>
				<div class="imagen-cuerpo">
					<img src="https://ess.pe/storage/servicios/May2017/dw82lWN89kKcBPPcEyFf.png" class="img-responsive">
					<br>
					<button class="btn-label"><label for="imagen_hero">Seleccionar archivo</label></button>
					<input type="file" name="imagen_hero" id="imagen_hero" class="input-file">
				</div>
			</div>
		</div>
	</div>
	<div class="box-accion">
		<button>Agregar</button>
	</div>
</div>
@stop


@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('static-admin/assets/summernote/summernote.css')}}">
<style type="text/css">
	#summernote{
		min-height: 200px;
	}
</style>
@stop

@section('js')
<script type="text/javascript" src="{{asset('static-admin/assets/summernote/summernote.min.js')}}"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$('#summernote').summernote({
			height: 450,
			minHeight: null,
			maxHeight: null,
			focus: false 
		});
		$('#summernote-2').summernote({
			height: 250,
			minHeight: null,
			maxHeight: null,
			focus: false 
		});
		$('.regresar-agregar').click(function(){
			$('.lista').hide();
			$('.agregar').show();
		});
		$('.regresar-lista').click(function(){
			$('.lista').show();
			$('.agregar').hide();
		});
	});
</script>
@stop