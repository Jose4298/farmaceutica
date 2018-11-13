<?php

namespace Farmaceutic\Http\Controllers;

use Illuminate\Http\Request;
use Farmaceutic\descuento;
use Farmaceutic\municipio;
use Farmaceutic\Clientes;
use Session;
use Redirect;
use Farmaceutic\Http\Requests;
use Farmaceutic\Http\Requests\ClienteCreateRequest;
class clienteController extends Controller
{
   
    public function index()
    {
        $clientes = Clientes ::withTrashed()
        ->get();
        return view('clientes.index')
        ->with('clientes',$clientes);


    }
    
    public function create()
    {
        $clientes = Clientes::all();
        $descuentos = descuento::all();
        $municipios = municipio::all();
        return view("clientes.create",compact('clientes','municipios','descuentos'));
    }
   
    public function store(ClienteCreateRequest $request)
    {
       
      Clientes::create([
        'id_cliente' => $request['id_cliente'],
        'nombre' => $request['nombre'], 
        'apellido_p' => $request['apellido_p'], 
        'apellido_m' => $request['apellido_m'], 
        'calle' => $request['calle'], 
        'colonia' => $request['colonia'], 
        'numero' => $request['numero'], 
        'codigo_postal' => $request['codigo_postal'], 
        'telefono' => $request['telefono'], 
        'email' => $request['email'], 
        'RFC' => $request['RFC'], 
        'id_descuento' => $request['id_descuento'], 
        'id_municipio' => $request['id_municipio'],
         ]);
        Session::flash('message','Cliente editado correctamente');
        return  Redirect::to('/cliente');
        
    }
   public function show($id_cliente)
   {
    Clientes::withTrashed()
    ->where('id_cliente',$id_cliente)
    ->restore();


    Session::flash('message','Cliente restaurado correctamente');
    return Redirect::to('/cliente');
   }
    public function edit($id_cliente)
    {
    
    $clientes = Clientes::find($id_cliente);
    $descuentos = descuento::all();
    $municipios = municipio::all();
   return view('clientes.edit')
   ->with('clientes',$clientes)
   ->with('descuentos',$descuentos)
   ->with('municipios',$municipios);
    }
    public function update($id_cliente, Request $request )
    {
       $cliente = Clientes::find($id_cliente);
        $cliente->fill($request->all());
       $cliente->save();
       Session::flash('message','Cliente editado correctamente');
        return  Redirect::to('/cliente');
    }
   public function destroy($id_cliente)
    {
      Clientes::destroy($id_cliente);
      
     Session::flash('message','Cliente eliminado correctamente');
      return Redirect::to('/cliente');
    }
}
