<?php

namespace Farmaceutic\Http\Controllers;

use Illuminate\Http\Request;

use Farmaceutic\Http\Requests;
use Farmaceutic\producto;
use Farmaceutic\seccion;
use Session;
use Redirect;
use Storage;
use Farmaceutic\Http\Requests\ProductoRequestCreate;
class productocontroller extends Controller
{
    public function index(){
    $productos = producto::all();
    return view('producto.index',compact('productos'));
}

public function create()
{
    $productos = producto::all();
    $secciones = seccion::all();
    return view("producto.create",compact('productos','secciones'));
}

public function store(ProductoRequestCreate $request)
{
    $archivo         = $request->file('img');

if($archivo != '' || $archivo != null ){

    $nombre_original = $request->file('img')->getClientOriginalName();
    $extension       = $request->file('img')->getClientOriginalExtension();
    $r1              = Storage::disk('archivos')->put($nombre_original, \File::get($archivo));
    $ruta            = public_path('archivos') . "/" . $nombre_original;


  producto::create([
    'id_producto' => $request['id_producto'],
    'nombre' => $request['nombre'], 
    'precio' => $request['precio'], 
    'max_bodega' => $request['max_bodega'], 
    'min_bodega' => $request['min_bodega'], 
    'punto_m_bodega' => $request['punto_m_bodega'], 
    
    'archivo'=> $nombre_original,
    'id_seccion' => $request['id_seccion'], 
   
   
     ]);
    Session::flash('message','Empleado editado correctamente');
    return  Redirect::to('/producto');
    // redireccionando al carpeta y / significa index
}else{
    producto::create([
        'id_producto' => $request['id_producto'],
        'nombre' => $request['nombre'], 
        'precio' => $request['precio'], 
        'max_bodega' => $request['max_bodega'], 
        'min_bodega' => $request['min_bodega'], 
        'punto_m_bodega' => $request['punto_m_bodega'], 
        
        'archivo'=> 'sinfoto.jpg',
        'id_seccion' => $request['id_seccion'], 
       
        
     ]);
     Session::flash('message','Empleado creado exitosamente sin foto');
     return  Redirect::to('/producto'); // esta linea solo redireccionara un mensaje de realizado corrctamente
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
