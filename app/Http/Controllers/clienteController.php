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
        $clientes = Clientes::all();
        return view('clientes.index',compact('clientes'));
    }
    
    public function create()
    {
        $clientes = Clientes::all();
        $descuentos = descuento::all();
        $municipios = municipio::all();
        return view("clientes.create",compact('clientes','municipios','descuentos'));
    }
    // no se te olvide crear el request y colocarlo en true
    public function store(ClienteCreateRequest $request)
    {
        // estado es el nombre del modelo
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
        // redireccionando al carpeta y / significa index
    }
   public function show($id_cliente)
   {
       
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
    Session::flash('message','Estado editado correctamente');
    return  Redirect::to('/cliente');
    }
   public function destroy($id_cliente)
    {
      //estados::destroy($id_estado);
      
     // Session::flash('message','Estado eliminado correctamente');
      //return Redirect::to('/estado');
    }
}
