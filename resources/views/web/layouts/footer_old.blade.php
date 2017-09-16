<?php $generales = App\Generale::where('id',1)->first(); ?>
<div class="color-negro" id="contacto">
   <div class="container content-md">
      <div class="row">
         <div class="col-md-7 overflow-h">
         <p class="contacto">CONTACTO</p>
            <p class="form-w">{!! $generales->contacto_titulo !!}
            </p>
            {!! $generales->contacto_mapa !!}
         </div>
         <div class="col-md-5 md-margin-bottom-40 top-form linea-izquierda">
            <form action="{{route('formulario')}}" method="post" enctype="multipart/form-data" id="sky-form1" class="sky-form">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <fieldset>
                  <div class="row">
                     <section class="col col-11">
                        <label class="input">
                           <input type="text" name="name" placeholder="Nombre y Apellido">
                        </label>
                     </section>
                  </div>
                  <div class="row">
                     <section class="col col-11">
                        <label class="input">
                           <input type="email" name="email" placeholder="E-mail">
                        </label>
                     </section>
                  </div>
                  <div class="row">
                     <section class="col col-11">
                        <label class="input">
                           <input type="number" name="phone" placeholder="Teléfono">
                        </label>
                     </section>
                     <section class="col col-11">
                        <label class="textarea">
                           <textarea rows="5" name="comment" placeholder="Mensaje"></textarea>
                        </label>
                     </section>
                  </div>
               </fieldset>
               <footer style="text-align: left; padding-right: 25px;padding-left: 30px;" class="col col-11 padd-l-r">
                  <button type="submit" class="btn-u wi100"><b>ENVIAR</b></button>
                  <div class="progress"></div>
               </footer>
               <div class="message">
                  <i class="rounded-x fa fa-check"></i>
                  <p>Gracias por escribirnos.!<br>Te contactaremos lo más rápido posible.</p>
               </div>
            </form>
         </div>
      </div>
      <div class="row">
         <div class="col-md-3 col-sm-12 padding-bot-12">
            {!! $generales->footer_1 !!}
         </div>
         <div class="col-md-3 col-sm-12 padding-bot-12">
            {!! $generales->footer_2 !!}
         </div>
         <div class="col-md-3 col-sm-12 padding-bot-12">
            {!! $generales->footer_3 !!}
         </div>
         <div class="col-md-3 col-sm-12 padding-bot-12">
            {!! $generales->footer_4 !!}
         </div>
      </div>
      <div class="row">
         <div class="col-md-9">
            <img src="{{asset('img/Logo-Elemental-footer.png')}}" alt="" class="logo-foo">
         </div>
         <div class="col-md-3">
            <p class="footer-text-foo">Copyright 2016 Elemental Studio S.A.C.</p>
         </div>
      </div>
   </div>
</div>