@extends('layouts.master')

@section('content')

<style>
	.mega-menu{
		background: #1b1b1b !important;
	}

</style>
<div class="content-md paddding-top-28">
	<div class="lineas-ama1-port"></div>
	<div class="lineas-ama2-port"></div>
	<div class="lineas-ama3-port"></div>
</div>

<div class="container content-md padding-top-100">
<p class="portafolio responsive-home" id="port-vis">PORTAFOLIO</p>
	
<div class="cube-portfolio container margin-bottom-20">

		<div class="margin-bottom-30">
			<div id="filters-container" class="cbp-l-filters-text padding-port">
				<div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> All </div>
				<?php
					$tags = array();
				?>
				@foreach($portafolios as $portafolio)
				<?php
					if ( in_array(str_slug($portafolio->tag),$tags) ) {
					    $pinta = 'NO';
					}
					else{
						array_push($tags, str_slug($portafolio->tag) );
						$pinta = 'SI';
					}
				?>
				@if($pinta == 'SI')
				<div data-filter=".{{ str_slug($portafolio->tag) }}" class="cbp-filter-item cbp-filter-item"> {{ $portafolio->tag }} </div>
				@endif
				@endforeach
				<!-- <div data-filter=".illustration" class="cbp-filter-item"> Social Media </div>
				<div data-filter=".web-design" class="cbp-filter-item"> Web Design </div> -->
			</div>
			<!--/end Filters Container-->
		</div>
		<div id="grid-container" class="cbp-l-grid-gallery">
			@foreach($portafolios as $portafolio)
			<div class="cbp-item {{ str_slug($portafolio->tag) }}">
				<!-- illustration web-design -->
				<a href="{{route('proyecto',$portafolio->slug)}}" class="cbp-caption"
				data-title="{{$portafolio->nombre}}">
				<div class="cbp-caption-defaultWrap">
					<?php
						$type = 'small';
						$image = $portafolio->imagen;
						// We need to get extension type ( .jpeg , .png ...)
				        $ext    = pathinfo($image, PATHINFO_EXTENSION);
				        // We remove extension from file name so we can append thumbnail type
				        $name   = rtrim($image, '.'. $ext);
				        // We merge original name + type + extension
				        $image  = $name . '-' . $type . '.' . $ext;
					?>
					<img src="{{asset('storage/'.$image)}}" alt="">
				</div>
				<div class="cbp-caption-activeWrap">
					<div class="cbp-l-caption-alignLeft">
						<div class="cbp-l-caption-body">
							<div class="cbp-l-caption-title medio">{{$portafolio->nombre}}</div>
							<div class="cbp-l-caption-desc medio1">{{$portafolio->tag}}</div>
						</div>
					</div>
				</div>
			</a>
			<p class="category-port">{{$portafolio->tag}} <br><span class="porta-names">{{$portafolio->nombre}}</span></p>
		</div>
		@endforeach

	</div>
	<!--/end Grid Container-->
</div>
</div>


@stop