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
        $personales = personales::find($id_empleado);
        $personales->nombre = $request->nombre;
        $personales->apellido_p = $request->apellido_p;
        $personales->apellido_m = $request->apellido_m;
        
        $personales->calle = $request->calle;
        $personales->colonia = $request->colonia;
        $personales->numero = $request->numero;
        $personales->codigo_postal = $request->codigo_postal;
        $personales->telefono = $request->telefono;
        
        $personales->telefono = $request->telefono;
        $personales->id_municipios = $request->id_municipios;
        $personales->id_puesto = $request->id_puesto;
        $personales->archivo = $nombre_original;
        $personales->save();
        Session::flash('message','Personal modificado exitosamente');
     return  Redirect::to('/personal'); // esta linea solo redireccionara un mensaje de realizado corrctamente
    }else{
        $personales = personales::find($id_personal);
        $personales->nombre = $request->nombre;
        $personales->ap_pat = $request->ap_pat;
        $personales->ap_mat = $request->ap_mat;
        $personales->genero = $request->genero;
        $personales->calle = $request->calle;
        $personales->colonia = $request->colonia;
        $personales->cp = $request->cp;
        $personales->correo = $request->correo;
        $personales->telefono = $request->telefono;
        $personales->id_municipios = $request->id_municipios;
        $personales->id_puesto = $request->id_puesto;
        $personales->archivo = 'sinfoto.jpg';
        $personales->save();
        Session::flash('message','Empleado modificado exitosamente sin foto');
     return  Redirect::to('/personal'); // esta linea solo redireccionara un mensaje de realizado correctamente
    }
    }
   public function destroy($id_empleado)
    {
      //estados::destroy($id_estado);
      
     // Session::flash('message','Estado eliminado correctamente');
      //return Redirect::to('/estado');
    }
}
