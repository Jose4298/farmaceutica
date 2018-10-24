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
                                <td><a class="btn btn-dark btn-outline m-b-10 m-l-5" href="{{route('estado.create')}}"   role="button"> + Agregar un nuevo estado</a></td>
                               
                               
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    
                                    <table class="table table-hover ">
                                    <thead>
                                        <tr>
                                                <th>#</th>
                                                <th>producto</th>
                                                <th>operaciones</th>  
                                        </tr>    
                                    </thead>
                                    <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Productos</th>
                                              
                                            </tr>
                                    </tfoot>
                                        @foreach($productos as $producto)
                                        <tbody>
                                        <td>{{$producto->id_producto}}</td>
                                       <td>{{$precio->precio}}</td>
                                       <td>{{$max_bodega->max_bodega}}</td>
                                       <td>{{$min_bodega->min_bodega}}</td>
                                       <td>{{$punto_m_bodega->punto_m_bodega}}</td>
                                       <td>
                                        {!!link_to_route('producto.edit', $title = 'Editar', $parameters = $producto->id_producto, $attributes = ['class'=>'btn btn-success btn-flat btn-addon m-b-10 m-l-5'])!!} 
                                    
                                        {!!Form::open(['route' => ['producto.destroy',$producto->id_producto],'method'=>'DELETE'])!!} 
                                        {!!Form::submit('Eliminar',['class'=>'btn btn-inverse waves-effect waves-light'  ])!!}
                                        {!!Form::close()!!}

                                       </td>
                                        </tbody>
                                       @endforeach
                                   </table>
                                </div>
                               </div>
                             </div>   
                           </div>
</div>
      
@endsection
