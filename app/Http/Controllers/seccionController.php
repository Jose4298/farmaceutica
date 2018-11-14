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

        $secciones = seccion ::withTrashed()
        ->get();
        return view('seccion.index')
        ->with('secciones',$secciones);

      
    }
    
    public function create()
    {
        return view("seccion.create");
    }
    
    public function store(SeccionCreateRequest $request)
    {
       
      seccion::create([
        'id_seccion' => $request['id_seccion'],
        'nombre' => $request['nombre'], 
         ]);
        Session::flash('message','Seccion editada correctamente');
        return  Redirect::to('/seccion');
       
    }
   public function show($id_seccion)
   {
    seccion::withTrashed()
    ->where('id_seccion',$id_seccion)
    ->restore();


    Session::flash('message','Seccion restaurada correctamente');
    return Redirect::to('/seccion');
   }
    public function edit($id_seccion)
    {
      $secciones = seccion::find($id_seccion);
     return view('seccion.edit', ['seccion'=>$secciones]);
    }
    public function update($id_seccion, SeccionCreateRequest $request )
    {
        $secciones = seccion::find($id_seccion);
        $secciones->fill($request->all());
       $secciones->save();
        Session::flash('message','Seccion editada correctamente');
        return  Redirect::to('/seccion');
    }
   public function destroy($id_seccion)
    {
      seccion::destroy($id_seccion);
      
     Session::flash('message','Seccion eliminada correctamente');
      return Redirect::to('/seccion');
    }
    
}
