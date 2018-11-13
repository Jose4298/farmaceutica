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

        $proveedores = proveedor ::withTrashed()
        ->get();
        return view('proveedores.index')
        ->with('proveedores',$proveedores);

    
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
    proveedor::withTrashed()
    ->where('id_proveedores',$id_proveedores)
    ->restore();


    Session::flash('message','Proveedor restaurado correctamente');
    return Redirect::to('/proveedor'); 
   }
    public function edit($id_proveedores)
    {
        $proveedores = proveedor::find($id_proveedores);
        $municipios = municipio::all();
        
       return view('proveedores.edit')
       ->with('proveedores',$proveedores)
       ->with('municipios',$municipios);
       
    }
    public function update($id_proveedores, Request $request )
    {
        $proveedor = proveedor::find($id_proveedores);
        $proveedor->fill($request->all());
       $proveedor->save();
       Session::flash('message','Proveedor editado correctamente');
        return  Redirect::to('/proveedor');
    }
   public function destroy($id_proveedores)
    {
      proveedor::destroy($id_proveedores);
      
      Session::flash('message','Proveedor eliminado correctamente');
      return Redirect::to('/proveedor');
    }
}
