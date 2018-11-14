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
        $empleados = empleado ::withTrashed()
        ->get();
        return view('empleados.index')
        ->with('empleados',$empleados);

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
    empleado::withTrashed()
    ->where('id_empleado',$id_empleado)
    ->restore();


    Session::flash('message','Empleado restaurado correctamente');
    return Redirect::to('/empleado');
   }
    public function edit($id_empleado)
    {
        $empleados = empleado::find($id_empleado);
        $municipios = municipio::all();
        $empleados = empleado::find($id_empleado);
        return view('empleados.edit')
       ->with('empleados',$empleados)
       ->with('municipios',$municipios);
    }
    public function update($id_empleado, Request $request )
    {
        $archivo         = $request->file('img');
        if($archivo != '' || $archivo != null ){
        $nombre_original = $request->file('img')->getClientOriginalName();
        $extension       = $request->file('img')->getClientOriginalExtension();
        $r1              = Storage::disk('archivos')->put($nombre_original, \File::get($archivo));
        $ruta            = public_path('archivos') . "/" . $nombre_original;
    
        $empleados = empleado::find($id_empleado);
        $empleados->nombre = $request->nombre;
        $empleados->apellido_p = $request->apellido_p;
        $empleados->apellido_m = $request->apellido_m;
        $empleados->calle = $request->calle;
        $empleados->colonia = $request->colonia;
        $empleados->numero = $request->numero;
        $empleados->codigo_postal = $request->codigo_postal;
        $empleados->telefono = $request->telefono;
        $empleados->email = $request->email;
        $empleados->RFC = $request->RFC;
        $empleados->id_municipio = $request->id_municipio;
        $empleados->archivo = $nombre_original;
        $empleados->save();
        Session::flash('message','Empleado modificado exitosamente');
     return  Redirect::to('/empleado'); // esta linea solo redireccionara un mensaje de realizado corrctamente
    }else{
    
        $empleados = empleado::find($id_empleado);
        $empleados->nombre = $request->nombre;
        $empleados->apellido_p = $request->apellido_p;
        $empleados->apellido_m = $request->apellido_m;
        $empleados->calle = $request->calle;
        $empleados->colonia = $request->colonia;
        $empleados->numero = $request->numero;
        $empleados->codigo_postal = $request->codigo_postal;
        $empleados->telefono = $request->telefono;
        $empleados->email = $request->email;
        $empleados->RFC = $request->RFC;
        $empleados->id_municipio = $request->id_municipio;
        $productos->archivo = 'sinfoto.jpg';
        $productos->save();
        Session::flash('message','Empleado modificado exitosamente sin foto');
     return  Redirect::to('/empleado'); 
    }
    }
   public function destroy($id_empleado)
   {
    empleado::destroy($id_empleado);
    
   Session::flash('message','Empleado eliminado correctamente');
    return Redirect::to('/empleado');
  }
}
