<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreadoresController extends Controller
{
    public function index(){

        return view('creadores.index');
    }
}
