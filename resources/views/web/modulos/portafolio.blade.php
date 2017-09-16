 <div class="container content-md" id="portafolio">
  <p class="portafolio responsive-home hide-portafolio">PORTAFOLIO</p>
  <div class="row">
    <div class="col-md-12">
      <p class="more-projects more-responsive"><a href="{{route('web.main.portafolio')}}">Más proyectos <i class="fa fa-long-arrow-right flecha-"></i></a></p>
    </div>
  </div>
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
      </div>
    </div>
    <div id="grid-container" class="cbp-l-grid-gallery">
      @foreach($portafolios as $portafolio)
      <div class="cbp-item {{ str_slug($portafolio->tag) }}">
        <a href="{{route('web.main.proyecto',$portafolio->slug)}}" class="cbp-caption"
          data-title="{{$portafolio->nombre}}">
          <div class="cbp-caption-defaultWrap">
            <?php
              $type   = 'small';
              $image  = $portafolio->imagen;
              $ext    = pathinfo($image, PATHINFO_EXTENSION);
              $name   = rtrim($image, '.'. $ext);
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
  </div>
</div>