<?php

namespace Farmaceutic\Http\Controllers;

use Illuminate\Http\Request;

use Farmaceutic\Http\Requests;
use Farmaceutic\seccion;
use Session;
use Redirect;
use Farmaceutic\Http\Requests\SeccionCreateRequest;

class seccionController extends Controller
{
    public function index()
    {
        $secciones = seccion::all();
        return view('seccion.index',compact('secciones'));
    }
    
    public function create()
    {
        return view("seccion.create");
    }
    // no se te olvide crear el request y colocarlo en true
    public function store(SeccionCreateRequest $request)
    {
        // estado es el nombre del modelo
      seccion::create([
        'id_seccion' => $request['id_seccion'],
        'nombre' => $request['nombre'], 
         ]);
        Session::flash('message','Seccion editada correctamente');
        return  Redirect::to('/seccion');
        // redireccionando al carpeta y / significa index
    }
   public function show($id_seccion)
   {
       
   }
    public function edit($id_seccion)
    {
    //  $estado = estados::find($id_estado);
     // return view('estado.edit', ['estado'=>$estado]);
    }
    public function update($id_seccion, Request $request )
    {
       // $estado = estados::find($id_estado);
        //$estado->fill($request->all());
       // $estado->save();
        //Session::flash('message','Estado editado correctamente');
        //return  Redirect::to('/estado');
    }
   public function destroy($id_seccion)
    {
      //estados::destroy($id_estado);
      
     // Session::flash('message','Estado eliminado correctamente');
      //return Redirect::to('/estado');
    }
    
}
