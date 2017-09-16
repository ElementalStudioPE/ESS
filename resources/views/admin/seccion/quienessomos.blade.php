@extends('admin.layouts.master')


@section('content')
<?php $generales = App\Generale::where('id',1)->first(); ?>
<form class="contact_form" name="formulario" enctype="multipart/form-data" method="POST" action="{{action('Admin\SeccionController@post_quienessomos')}}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class='col-xs-12 col-sm-12 col-md-12'>
	<div class="">
		<h2 class="titulo-seccion">Quiénes Somos</h2>
	</div>
</div>
<div class='col-xs-12 col-sm-6 col-md-8'>
	<div class="panel">
		<div class="panel-content">
			<h4>Texto Principal</h4>
			<textarea id="summernote" name="quienessomos_titulo">{!! $generales->quienessomos_titulo !!}</textarea>
		</div>
	</div>
	<div class="panel">
		<div class="panel-content">
			<h4>Texto Descriptivo</h4>
			<textarea id="summernote-2" name="quienessomos_descripcion">{!! $generales->quienessomos_descripcion !!}</textarea>
		</div>
	</div>
</div>
<div class='col-xs-12 col-sm-6 col-md-4'>
	<div class="panel">
		<div class="panel-content">
			<div class="imagen-box">
				<div class="imagen-titulo">IMAGEN</div>
				<div class="imagen-cuerpo">
					@if($generales->quienessomos_imagen != '')
					<img src="{{asset('storage/'.$generales->quienessomos_imagen)}}" class="img-responsive">
					@endif
					<br>
					<a class="btn-label"><label for="quienessomos_imagen">Seleccionar archivo</label></a>
					<input type="file" name="quienessomos_imagen" id="quienessomos_imagen" class="input-file">
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
		$('#summernote').summernote({
		  height: 100,                 // set editor height
		  minHeight: null,             // set minimum height of editor
		  maxHeight: null,             // set maximum height of editor
		  focus: false                  // set focus to editable area after initializing summernote
		});
		$('#summernote-2').summernote({
		  height: 200,                 // set editor height
		  minHeight: null,             // set minimum height of editor
		  maxHeight: null,             // set maximum height of editor
		  focus: false                  // set focus to editable area after initializing summernote
		});
	})
</script>
@stop