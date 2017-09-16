@extends('admin.layouts.master')


@section('content')
<?php $generales = App\Generale::where('id',1)->first(); ?>
<form class="contact_form" name="formulario" enctype="multipart/form-data" method="POST" action="{{action('Admin\SeccionController@post_principal')}}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class='col-xs-12 col-sm-12 col-md-12'>
	<div class="">
		<h2 class="titulo-seccion">Principal</h2>
	</div>
</div>
<div class='col-xs-12 col-sm-6 col-md-8'>
	<div class="panel">
		<div class="panel-content">
			<h4>Texto Principal</h4>
			<textarea id="inicio_mensaje" name="inicio_mensaje">{!! $generales->inicio_mensaje !!}</textarea>
		</div>
	</div>
</div>
<div class='col-xs-12 col-sm-6 col-md-4'>
	<div class="panel">
		<div class="panel-content">
			<div class="imagen-box">
				<div class="imagen-titulo">IMAGEN</div>
				<div class="imagen-cuerpo">
					@if($generales->inicio_background != '')
					<img src="{{asset('storage/'.$generales->inicio_background)}}" class="img-responsive">
					@endif
					<br>
					<a class="btn-label"><label for="inicio_background">Seleccionar archivo</label></a>
					<input type="file" name="inicio_background" id="inicio_background" class="input-file">
				</div>
			</div>
		</div>
	</div>
	<div class="box-accion">
		<button type="submit">Actualizar</button>
	</div>
</div>
<form>
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
		$('#inicio_mensaje').summernote({
		  height: 200,
		  minHeight: null,
		  maxHeight: null,
		  focus: false 
		});
	})
</script>
@stop