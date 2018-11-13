@extends('layouts.principal')
@section('content')


@if(Session::has('message'))
<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif


<div class="row justify-content-center">
<div class="col-lg-6">                 
<div class="card ">
                            <div class="card-title">
                                <h4 aling-text='center'>Productos Registrados.. </h4>
                                <td><a class="btn btn-dark btn-outline m-b-10 m-l-5" href="{{route('producto.create')}}"   role="button"> + Agregar un nuevo producto</a></td>
                               
                               
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    
                                    <table class="table table-hover ">
                                    <thead>
                                        <tr>
                                                <th>#</th>
                                                <th>Nombre</th>
                                                <th>Precio</th>
                                                <th>Maximo en bodega</th>
                                                <th>Minimo en bodega</th> 
                                                <th>Producto medio de bodega</th> 
                                                <th>Imagen</th>  
                                                <th>Operaciones</th> 
                                        </tr>    
                                    </thead>
                                    <tfoot>
                                            <tr>
                                            <th>#</th>
                                                <th>Nombre</th>
                                                <th>Precio</th>
                                                <th>Maximo en bodega</th>
                                                <th>Minimo en bodega</th> 
                                                <th>Producto medio de bodega</th>
                                                <th>Imagen</th>    
                                                <th>Operaciones</th> 
                                              
                                            </tr>
                                    </tfoot>
                                    @if(count($productos) > 0)
                                        @foreach($productos as $producto)
                                       <tbody>
                                       <td>{{$producto->id_producto}}</td>
                                       <td>{{$producto->nombre}}</td>
                                       <td>{{$producto->precio}}</td>
                                       <td>{{$producto->max_bodega}}</td>
                                       <td>{{$producto->min_bodega}}</td>
                                       <td>{{$producto->punto_m_bodega}}</td>
                                       <td><img src="img_usuario/{{$producto->archivo}}" alt="" style="width:200px; height:100px;"></td>
                                       <td>
                                       @if($producto->deleted_at =="")
                                        {!!link_to_route('producto.edit', $title = 'Editar', $parameters = $producto->id_producto, $attributes = ['class'=>'btn btn-success btn-flat btn-addon m-b-10 m-l-5'])!!} 
                                    
                                        {!!Form::open(['route' => ['producto.destroy',$producto->id_producto],'method'=>'DELETE'])!!} 
                                        {!!Form::submit('Eliminar',['class'=>'btn btn-inverse waves-effect waves-light'  ])!!}
                                        {!!Form::close()!!}
                                        @else
                                        {!!link_to_route('producto.show', $title = 'Restaurar', $parameters =  $producto->id_producto, $attributes = ['class'=>'btn btn-info btn-flat btn-addon m-b-10 m-l-5'] )!!}
                                        @endif
                                       </td>
                                        </tbody>
                                       @endforeach
                                       @endif
                                   </table>
                                </div>
                               </div>
                             </div>   
                           </div>
</div>
@endsection
