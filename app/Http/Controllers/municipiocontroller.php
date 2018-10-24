<?php

namespace Farmaceutic\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use Redirect;
use Farmaceutic\Http\Requests;
use Farmaceutic\municipio;
use Farmaceutic\estado;
use Farmaceutic\Http\Requests\MunicipioCreateRequest;
class municipiocontroller extends Controller
{
    public function index()
    {
        $municipios = municipio::all();
        return view('municipio.index',compact('municipios'));
    }
    
    public function create()
    {
        $estados = estado::all();
        $municipios = municipio::all();
        return view("municipio.create",compact('estados','municipios'));
    }
    // no se te olvide crear el request y colocarlo en true
    public function store(MunicipioCreateRequest $request)
    {
        // estado es el nombre del modelo
      municipio::create([
        'id_municipio' => $request['id_municipio'],
        'nombre' => $request['nombre'], 
        'id_estado' => $request['id_estado'], 
         ]);
        Session::flash('message','Municipio editado correctamente');
        return  Redirect::to('/municipio');
        // redireccionando al carpeta y / significa index
    }
   public function show($id_municipio)
   {
       
   }
    public function edit($id_municipio)
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
   public function destroy($id_municipio)
    {
      //estados::destroy($id_estado);
      
     // Session::flash('message','Estado eliminado correctamente');
      //return Redirect::to('/estado');
    }
}
