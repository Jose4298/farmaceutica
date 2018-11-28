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
   
        $productos = producto ::withTrashed()
        ->get();
        return view('producto.index')
        ->with('productos',$productos);

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

public function show($id_producto)
{
    producto::withTrashed()
    ->where('id_producto',$id_producto)
    ->restore();
    Session::flash('message','Producto restaurado correctamente');
    return Redirect::to('/producto');
}
public function edit($id_producto)
{
    
    $producto = producto::where('id_producto','=',$id_producto)
    ->get();
    
    $id_seccion = $producto[0]->id_seccion;
    
    $secciones = seccion::where('id_seccion','=',$id_seccion)
    ->get();
    $demassecciones = seccion::where('id_seccion','!=',$id_seccion)
                               ->get();
    
    
    return view('producto.edit')
                             ->with('producto',$producto[0])
                             ->with('id_seccion',$id_seccion)
                             ->with('secciones',$secciones[0]->nombre)
                             ->with('demassecciones',$demassecciones);


}
public function update($id_producto, ProductoRequestCreate $request )
{
    $archivo         = $request->file('img');
    if($archivo != '' || $archivo != null ){
    $nombre_original = $request->file('img')->getClientOriginalName();
    $extension       = $request->file('img')->getClientOriginalExtension();
    $r1              = Storage::disk('archivos')->put($nombre_original, \File::get($archivo));
    $ruta            = public_path('archivos') . "/" . $nombre_original;

    $productos = producto::find($id_producto);
    $productos->nombre = $request->nombre;
    $productos->precio = $request->precio;
    $productos->max_bodega = $request->max_bodega;
    $productos->min_bodega = $request->min_bodega;
    $productos->punto_m_bodega = $request->punto_m_bodega;
    $productos->archivo = $nombre_original;
    $productos->id_seccion = $request->id_seccion;
    $productos->save();
    Session::flash('message','Empleado modificado exitosamente');
 return  Redirect::to('/producto'); // esta linea solo redireccionara un mensaje de realizado corrctamente
}else{

    $productos= producto::find($id_producto);
    $productos->nombre = $request->nombre;
    $productos->precio = $request->precio;
    $productos->max_bodega = $request->max_bodega;
    $productos->min_bodega = $request->min_bodega;
    $productos->punto_m_bodega = $request->punto_m_bodega;
  
    if($archivo!='')
    {
        $productos->img = $nombre_original;
    }
    $productos->id_seccion = $request->id_seccion;
    $productos->save();
    Session::flash('message','Empleado modificado exitosamente sin foto');
 return  Redirect::to('/producto'); 
}
}
public function destroy($id_producto)
{
  producto::destroy($id_producto);
  
  Session::flash('message','Producto eliminado correctamente');
  return Redirect::to('/producto');
}
}
