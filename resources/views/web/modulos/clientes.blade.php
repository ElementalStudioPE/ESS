<div class="color-plomo" id="clientes">
  <div class="container content-md">
    <p class="clientes">CLIENTES</p>
    <div class="owl-carousel-v2 owl-carousel-style-v1 margin-bottom-50">
      <h2 class="heading-md line-bot-clients responsive-clientes" style="padding-bottom: 55px;padding-left: 63px;">Buscamos promover el emprendimiento <br><span class="amarillo2"> y potenciar los negocios de nuestros clientes,</span><br>creando soluciones a la medida de sus<br> necesidades, orientándonos al logro de objetivos</h2>
      <br>
      <div class="row">
        <div class="large-12 columns">
          <div class="owl-carousel" id="carousel-footer">
            @foreach( $clientes as $cliente )
            <div> 
              <img src="{{asset('storage/'.$cliente->imagen)}}" alt="" class="img-carou">
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>