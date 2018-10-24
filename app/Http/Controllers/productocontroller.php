<?php

namespace Farmaceutic\Http\Controllers;

use Illuminate\Http\Request;

use Farmaceutic\Http\Requests;
use Farmaceutic\producto;
use Farmaceutic\seccion;
use Session;
use Redirect;
use Farmaceutic\Http\Requests\ProductoRequestCreate;
class productocontroller extends Controller
{
    public function index()

    {
       
        $productos = producto::all();
        return view('producto.index',compact('productos'));
    }
    
    public function create()
    {  
        
        $secciones = seccion::all();
        $productos = producto::all();
        return view("producto.create",compact('puestos','secciones'));
        
    
    }
    // no se te olvide crear el request y colocarlo en true
    public function store(ProductoRequestCreate $request)
    {
        // estado es el nombre del modelo
      producto::create([
        'id_producto' => $request['id_producto'],
        'nombre' => $request['nombre'], 
        'precio' => $request['precio'], 
        'max_bodega' => $request['max_bodega'],
        'min_bodega' => $request['min_bodega'],
        'punto_m_bodega' => $request['punto_m_bodega'],
        'id_seccion' => $request['id_seccion'],  
         ]);
        Session::flash('message','Producto editado correctamente');
        return  Redirect::to('/producto');
        // redireccionando al carpeta y / significa index
    }
   public function show($id_producto)
   {
       
   }
    public function edit($id_producto)
    {
    //  $estado = estados::find($id_estado);
     // return view('estado.edit', ['estado'=>$estado]);
    }
    public function update($id_producto, Request $request )
    {
       // $estado = estados::find($id_estado);
        //$estado->fill($request->all());
       // $estado->save();
        //Session::flash('message','Estado editado correctamente');
        //return  Redirect::to('/estado');
    }
   public function destroy($id_producto)
    {
      //estados::destroy($id_estado);
      
     // Session::flash('message','Estado eliminado correctamente');
      //return Redirect::to('/estado');
    }
}
