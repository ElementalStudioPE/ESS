<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Generale;
use \DomDocument;
use Image;

class SeccionController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function principal()
    {
        return view('admin.seccion.principal');
    }

    public function post_principal(Request $request)
    {
        
        $objeto = Generale::find(1);

        if ( $request->hasFile('inicio_background') ){

            $file = $request->file('inicio_background');
            $filenameNombreOriginal = time().strtolower(str_random(10)).'.png';
            $original = Image::make( $request->file('inicio_background') );
            $original->orientate();
            $original->save('storage/'.$filenameNombreOriginal);

            $objeto->inicio_background = $filenameNombreOriginal;
        }

        if ( $request->inicio_mensaje != '' ) {

               $message=$request->inicio_mensaje;


               $dom = new DomDocument();
               libxml_use_internal_errors(true);
               $dom->loadHtml( mb_convert_encoding("<div>$message</div>", 'HTML-ENTITIES', "UTF-8"), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
               $container = $dom->getElementsByTagName('div')->item(0);
               $container = $container->parentNode->removeChild($container);

               while ($dom->firstChild) {
                 $dom->removeChild($dom->firstChild);
               }

               while ($container->firstChild ) {
                 $dom->appendChild($container->firstChild);
               }

               $images = $dom->getElementsByTagName('img');
               

               foreach($images as $img){
                  $src = $img->getAttribute('src');
         
                  if(preg_match('/data:image/', $src)){ 
                  preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                  $mimetype = $groups['mime']; 
                  

                  $filename = uniqid();
                  $filepath = "/uploads/blog_images/$filename.$mimetype";
                  

                  $image = Image::make($src)
                  // resize if required
                  /* ->resize(300, 200) */
                 ->encode($mimetype, 100)
                 ->save(public_path($filepath)); 

                 $new_src = $filepath;
                 $img->removeAttribute('src');
                 $img->setAttribute('src', $new_src);
                }

              }


            $objeto->inicio_mensaje = $dom->saveHTML();


        }

        $objeto->save();

        return redirect()->route('admin.seccion.principal');
    }

    public function quienessomos()
    {
        return view('admin.seccion.quienessomos');
    }

    public function post_quienessomos(Request $request)
    {


        $objeto = Generale::find(1);

        if ( $request->hasFile('quienessomos_imagen') ){

            $file = $request->file('quienessomos_imagen');
            $filenameNombreOriginal = time().strtolower(str_random(10)).'.png';
            $original = Image::make( $request->file('quienessomos_imagen') );
            $original->orientate();
            $original->save('storage/'.$filenameNombreOriginal);

            $objeto->quienessomos_imagen = $filenameNombreOriginal;
        }

        if ( $request->quienessomos_titulo != '' ) {

               $message=$request->quienessomos_titulo;

               $dom = new DomDocument();
               libxml_use_internal_errors(true);
               $dom->loadHtml( mb_convert_encoding("<div>$message</div>", 'HTML-ENTITIES', "UTF-8"), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
               $container = $dom->getElementsByTagName('div')->item(0);
               $container = $container->parentNode->removeChild($container);

               while ($dom->firstChild) {
                 $dom->removeChild($dom->firstChild);
               }

               while ($container->firstChild ) {
                 $dom->appendChild($container->firstChild);
               }

               $images = $dom->getElementsByTagName('img');
               
               foreach($images as $img){
                  $src = $img->getAttribute('src');
         
                  if(preg_match('/data:image/', $src)){ 
                  preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                  $mimetype = $groups['mime']; 
                  
                  $filename = uniqid();
                  $filepath = "/uploads/blog_images/$filename.$mimetype";
                  
                  $image = Image::make($src)
                  // resize if required
                  /* ->resize(300, 200) */
                 ->encode($mimetype, 100)
                 ->save(public_path($filepath)); 

                 $new_src = $filepath;
                 $img->removeAttribute('src');
                 $img->setAttribute('src', $new_src);
                }

              }

            $objeto->quienessomos_titulo = $dom->saveHTML();

        }


        if ( $request->quienessomos_descripcion != '' ) {

               $message=$request->quienessomos_descripcion;

               $dom = new DomDocument();
               libxml_use_internal_errors(true);
               $dom->loadHtml( mb_convert_encoding("<div>$message</div>", 'HTML-ENTITIES', "UTF-8"), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
               $container = $dom->getElementsByTagName('div')->item(0);
               $container = $container->parentNode->removeChild($container);

               while ($dom->firstChild) {
                 $dom->removeChild($dom->firstChild);
               }

               while ($container->firstChild ) {
                 $dom->appendChild($container->firstChild);
               }

               $images = $dom->getElementsByTagName('img');
               
               foreach($images as $img){
                  $src = $img->getAttribute('src');
         
                  if(preg_match('/data:image/', $src)){ 
                  preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                  $mimetype = $groups['mime']; 
                  
                  $filename = uniqid();
                  $filepath = "/uploads/blog_images/$filename.$mimetype";
                  
                  $image = Image::make($src)
                  // resize if required
                  /* ->resize(300, 200) */
                 ->encode($mimetype, 100)
                 ->save(public_path($filepath)); 

                 $new_src = $filepath;
                 $img->removeAttribute('src');
                 $img->setAttribute('src', $new_src);
                }

              }

            $objeto->quienessomos_descripcion = $dom->saveHTML();

        }

        $objeto->save();


        return redirect()->route('admin.seccion.quienessomos');
    }

    public function servicios()
    {
        return view('admin.seccion.servicios');
    }

    public function portafolios()
    {
        return view('admin.seccion.portafolios');
    }

    public function clientes()
    {
        return view('admin.seccion.clientes');
    }

    public function contacto()
    {
        return view('admin.seccion.contacto');
    }
}