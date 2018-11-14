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
        $municipios = municipio ::withTrashed()
        ->get();
        return view('municipio.index')
        ->with('municipio',$municipios);
    }
    
    public function create()
    {
        $estados = estado::all();
        $municipios = municipio::all();
        return view("municipio.create",compact('estados','municipios'));
    }
   
    public function store(MunicipioCreateRequest $request)
    {
 
      municipio::create([
        'id_municipio' => $request['id_municipio'],
        'nombre' => $request['nombre'], 
        'id_estado' => $request['id_estado'], 
         ]);
        Session::flash('message','Municipio editado correctamente');
        return  Redirect::to('/municipio');
       
    }
   public function show($id_municipio)
   {
    municipio::withTrashed()
    ->where('id_municipio',$id_municipio)
    ->restore();

    Session::flash('message','Municipio restaurado correctamente');
    return Redirect::to('/municipio');
   }
    public function edit($id_municipio)
    {
        $municipios = municipio::find($id_municipio);
        $estados = estado::all();
       return view('municipio.edit')
       ->with('municipios',$municipios)
       ->with('estados',$estados);
    }
    public function update($id_municipio, MunicipioCreateRequest $request )
    {
       $municipios = municipio::find($id_municipio);
       $municipios->fill($request->all());
       $municipios->save();
       Session::flash('message','Municipio editado correctamente');
       return  Redirect::to('/municipio');
    }
   public function destroy($id_municipio)
    {
        municipio::destroy($id_municipio);
      
     Session::flash('message','Municipio eliminado correctamente');
      return Redirect::to('/municipio');
    }
}
