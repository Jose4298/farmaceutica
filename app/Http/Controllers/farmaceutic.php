<?php

namespace Farmaceutic\Http\Controllers;

use Illuminate\Http\Request;

use Farmaceutic\Http\Requests;

class farmaceutic extends Controller
{
    public function index(){
        return view ('index');
     }
}
