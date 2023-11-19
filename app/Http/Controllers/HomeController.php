<?php

namespace App\Http\Controllers;

use App\Models\Creador;
use Illuminate\Http\Request;

class HomeController extends Controller
{

   public function __invoke()
   {

    $creadors = Creador::where('estado_verificacion','completada')->get();

    return view('home',compact('creadors'));

    }
}
