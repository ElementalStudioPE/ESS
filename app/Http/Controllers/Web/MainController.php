<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Contacto;
use App\Portafolio;
use App\Servicio;
use App\Cliente;
use App\Generale;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function home()
    {
        $portafolios = Portafolio::all();
		$servicios = Servicio::all();
		$clientes = Cliente::all();
		$generales = Generale::where('id',1)->first();
	    return view('web.home',compact('portafolios','servicios','clientes','generales'));
    }

    public function portafolio()
    {
    	$portafolios = Portafolio::all();
    	return view('web.portafolio',compact('portafolios'));
    }

    public function proyecto(Request $request,$proyectoSlug)
    {
        $portafolio = Portafolio::where('slug','=',$proyectoSlug)->first();
    	return view('web.proyecto',compact('portafolio'));
    }

    public function formulario()
    {
    	$contacto = new Contacto();
		$contacto->nombre 		= $request->name;
		$contacto->email 		= $request->email;
		$contacto->telefono 	= $request->phone;
		$contacto->mensaje 		= $request->comment;
		$contacto->save();

		return 'exito';
    }

}
