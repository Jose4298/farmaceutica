<?php

namespace Farmaceutic\Http\Controllers;

use Illuminate\Http\Request;
use Farmaceutic\Http\Requests;

// no se te olvide importar el modelo como se llama y revisa que tenga los mismo campos que la base 
use Farmaceutic\estado;
use Session;
use Redirect;
use Farmaceutic\Http\Requests\EstadoRequestCreate;


class estadocontroller extends Controller
{
    public function index()
    {
        $estados = estado ::withTrashed()
        ->get();
        return view('estado.index')
        ->with('estados',$estados);



        
    }
    
    public function create()
    {
        return view("estado.create");
    }
    // no se te olvide crear el request y colocarlo en true
    public function store(EstadoRequestCreate $request)
    {
        // estado es el nombre del modelo
      estado::create([
        'id_estado' => $request['id_estado'],
        'nombre' => $request['nombre'], 
         ]);
        Session::flash('message','Estado editado correctamente');
        return  Redirect::to('/estado');
        // redireccionando al carpeta y / significa index
    }
   public function show($id_estado)
   {

    estado::withTrashed()
    ->where('id_estado',$id_estado)
    ->restore();


    Session::flash('message','Estado restaurada correctamente');
    return Redirect::to('/estado');
   }
    public function edit($id_estado)
    {
    $estado = estado::find($id_estado);
    return view('estado.edit', ['estado'=>$estado]);
    }
    public function update($id_estado, Request $request )
    {
        $estado = estado::find($id_estado);
        $estado->fill($request->all());
        $estado->save();
        Session::flash('message','Estado editado correctamente');
        return  Redirect::to('/estado');
    }
   public function destroy($id_estado)
    {
        estado::destroy($id_estado);
      
        Session::flash('message','Estado eliminado correctamente');
        return Redirect::to('/estado');
    }
    
}
