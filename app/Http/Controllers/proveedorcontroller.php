<?php

namespace Farmaceutic\Http\Controllers;

use Illuminate\Http\Request;
use Farmaceutic\municipio;
use Farmaceutic\proveedor;
use Session;
use Redirect;
use Farmaceutic\Http\Requests;
use Farmaceutic\Http\Requests\ProveedorCreateRequest;
class proveedorcontroller extends Controller
{
    public function index()
    {
        $proveedores = proveedor::all();
        return view('proveedores.index',compact('proveedores'));
    }
    
    public function create()
    {
        $proveedores = proveedor::all();
        $municipios = municipio::all();
        return view("proveedores.create",compact('proveedor','municipios'));
    }
    // no se te olvide crear el request y colocarlo en true
    public function store(ProveedorCreateRequest $request)
    {
        // estado es el nombre del modelo
      proveedor::create([
        'id_proveedores' => $request['id_proveedores'],
        'nombre' => $request['nombre'], 
        'RFC' => $request['RFC'], 
        'calle' => $request['calle'], 
        'colonia' => $request['colonia'], 
        'numero' => $request['numero'], 
        'codigo_postal' => $request['codigo_postal'], 
        'telefono' => $request['telefono'], 
        'email' => $request['email'], 
        'nombre_contacto' => $request['nombre_contacto'], 
        'id_municipio' => $request['id_municipio'],
         ]);
        Session::flash('message','Proveedor editado correctamente');
        return  Redirect::to('/proveedor');
        // redireccionando al carpeta y / significa index
    }
   public function show($id_proveedores)
   {
       
   }
    public function edit($id_proveedores)
    {
    //  $estado = estados::find($id_estado);
     // return view('estado.edit', ['estado'=>$estado]);
    }
    public function update($id_municipio, Request $request )
    {
       // $estado = estados::find($id_estado);
        //$estado->fill($request->all());
       // $estado->save();
        //Session::flash('message','Estado editado correctamente');
        //return  Redirect::to('/estado');
    }
   public function destroy($id_proveedores)
    {
      //estados::destroy($id_estado);
      
     // Session::flash('message','Estado eliminado correctamente');
      //return Redirect::to('/estado');
    }
}
