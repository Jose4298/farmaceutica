<?php

namespace Farmaceutic\Http\Controllers;

use Illuminate\Http\Request;

use Farmaceutic\municipio;
use Farmaceutic\empleado;
use Session;
use Redirect;
use Storage;
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
    
    public function store(EmpleadoCreateRequest $request)
    {
        $archivo         = $request->file('img');

    if($archivo != '' || $archivo != null ){

        $nombre_original = $request->file('img')->getClientOriginalName();
        $extension       = $request->file('img')->getClientOriginalExtension();
        $r1              = Storage::disk('archivos')->put($nombre_original, \File::get($archivo));
        $ruta            = public_path('archivos') . "/" . $nombre_original;


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
        'archivo'=> $nombre_original,
        'id_municipio' => $request['id_municipio'],
         ]);
        Session::flash('message','Empleado editado correctamente');
        return  Redirect::to('/empleado');
        // redireccionando al carpeta y / significa index
    }else{
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
            'archivo'=> 'sinfoto.jpg',
            'id_municipio' => $request['id_municipio'],
         ]);
         Session::flash('message','Empleado creado exitosamente sin foto');
         return  Redirect::to('/empleado'); // esta linea solo redireccionara un mensaje de realizado corrctamente
            }
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
        $archivo         = $request->file('img');
        if($archivo != '' || $archivo != null ){
        $nombre_original = $request->file('img')->getClientOriginalName();
        $extension       = $request->file('img')->getClientOriginalExtension();
        $r1              = Storage::disk('archivos')->put($nombre_original, \File::get($archivo));
        $ruta            = public_path('archivos') . "/" . $nombre_original;

        $empleado = empleado::find($id);
        $empleado->nombre = $request->nombre;
        $empleado->apellido_p = $request->apellido_p;
        $empleado->apellido_m = $request->apellido_m;
        $empleado->calle = $request->calle;
        $empleado->colonia = $request->colonia;
        $empleado->numero = $request->numero;
        $empleado->codigo_postal = $request->codigo_postalp;
        $empleado->telefono = $request->telefono;
        $empleado->email = $request->email;
        $empleado->RFC = $request->RFC;
        $empleado->id_municipios = $request->id_municipios;
        $empleado->archivo = $nombre_original;
        $empleado->save();
        Session::flash('message','Empleado modificado exitosamente');
     return  Redirect::to('/empleado'); // esta linea solo redireccionara un mensaje de realizado corrctamente
    }else{

        $empleado = empleado::find($id);
        $empleado->nombre = $request->nombre;
        $empleado->apellido_p = $request->apellido_p;
        $empleado->apellido_m = $request->apellido_m;
        $empleado->calle = $request->calle;
        $empleado->colonia = $request->colonia;
        $empleado->numero = $request->numero;
        $empleado->codigo_postal = $request->codigo_postalp;
        $empleado->telefono = $request->telefono;
        $empleado->email = $request->email;
        $empleado->RFC = $request->RFC;
        $empleado->id_municipios = $request->id_municipios;
        $empleado->archivo = 'sinfoto.jpg';
        $empleado->save();
        Session::flash('message','Empleado modificado exitosamente sin foto');
     return  Redirect::to('/empleado'); // esta linea solo redireccionara un mensaje de realizado corrctamente
    }
    }
   public function destroy($id_empleado)
    {
      //estados::destroy($id_estado);
      
     // Session::flash('message','Estado eliminado correctamente');
      //return Redirect::to('/estado');
    }
}
