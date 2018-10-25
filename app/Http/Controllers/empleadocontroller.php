<?php

namespace Farmaceutic\Http\Controllers;

use Illuminate\Http\Request;

use Farmaceutic\municipio;
use Farmaceutic\empleado;
use Session;
use Redirect;
use Farmaceutic\Http\Requests;
use Farmaceutic\Http\Requests\EmpleadoCreateRequest;
class empleadocontroller extends Controller
{
    public function index()
    {
        $empleados = empleado::all();
        return view('empleados.index',compact('empleados'));
    }
    
    public function create()
    {
        $empleados = empleado::all();
        $municipios = municipio::all();
        return view("empleados.create",compact('empleados','municipios'));
    }
    // no se te olvide crear el request y colocarlo en true
    public function store(EmpleadoCreateRequest $request)
    {
        // estado es el nombre del modelo
      empleado::create([
        'id_empleado' => $request['id_empleado'],
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
        'id_municipio' => $request['id_municipio'],
         ]);
        Session::flash('message','Empleado editado correctamente');
        return  Redirect::to('/empleado');
        // redireccionando al carpeta y / significa index
    }
   public function show($id_empleado)
   {
       
   }
    public function edit($id_empleado)
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
   public function destroy($id_empleado)
    {
      //estados::destroy($id_estado);
      
     // Session::flash('message','Estado eliminado correctamente');
      //return Redirect::to('/estado');
    }
}
