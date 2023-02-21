<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    public function __construct() {
        $this->middleware('log.acesso');//carrega o middleware
    }
    
    public function sobreNos() {
        return view('site.sobre-nos');
    }
}
