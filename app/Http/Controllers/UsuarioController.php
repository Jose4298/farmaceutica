<?php

namespace Farmaceutic\Http\Controllers;

use Illuminate\Http\Request;

use Farmaceutic\Http\Requests;

class UsuarioController extends Controller
{
   
    public function create()
    {
        return view('usuario.create');
    }


}
