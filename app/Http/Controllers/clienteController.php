<?php

namespace Farmaceutic\Http\Controllers;

use Illuminate\Http\Request;

use Farmaceutic\Http\Requests;

class clienteController extends Controller
{
   
    public function index()
    {
        return view('clientes.index');
    }
    
    public function create()
    {
      
        return view('clientes.create'); 
    }
    
    public function store(EstadoRequestCreate $request)
    {
     
    }
   public function show($id_estado)
   {
       
   }
    public function edit($id_estado)
    {
      
    }
    public function update($id_estado, Request $request )
    {
        
    }
   public function destroy($id_estado)
    {
      
    }
    
}