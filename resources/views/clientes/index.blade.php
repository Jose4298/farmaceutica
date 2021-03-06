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
                                <h4 aling-text='center'>Clientes  Registrados.. </h4>
                                <td><a class="btn btn-dark btn-outline m-b-10 m-l-5" href="{{route('cliente.create')}}"   role="button"> + Agregar un nuevo cliente</a></td>
                               
                               
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    
                                    <table class="table table-hover ">
                                    <thead>
                                        <tr>
                                                <th>#</th>
                                                <th>Nombre</th>
                                                <th>Apellido Paterno</th>
                                                <th>Apellido Materno</th>
                                                <th>Telefono</th> 
                                                <th>Correo</th>
                                                <th>RFC</th>  
                                                <th>Operaciones</th> 
                                        </tr>    
                                    </thead>
                                    <tfoot>
                                            <tr>
                                            <th>#</th>
                                        
                                                <th>Nombre</th>
                                                <th>Apellido Paterno</th>
                                                <th>Apellido Materno</th>
                                                <th>Telefono</th> 
                                                <th>Correo</th>
                                                <th>RFC</th> 
                                                <th>Operaciones</th> 
                                            </tr>
                                    </tfoot>
                                    @if(count($clientes) > 0)
                                        @foreach($clientes as $cliente)
                                       <tbody>
                                       <td>{{$cliente->id_cliente}}</td>
                                       <td>{{$cliente->nombre}}</td>
                                       <td>{{$cliente->apellido_p}}</td>
                                       <td>{{$cliente->apellido_m}}</td>
                                     
                                       <td>{{$cliente->telefono}}</td>
                                       <td>{{$cliente->email}}</td>
                                       <td>{{$cliente->RFC}}</td>
                                      
                                       <td>
                                       @if($cliente->deleted_at =="")
                                        {!!link_to_route('cliente.edit', $title = 'Editar', $parameters = $cliente->id_cliente, $attributes = ['class'=>'btn btn-success btn-flat btn-addon m-b-10 m-l-5'])!!} 
                                    
                                        {!!Form::open(['route' => ['cliente.destroy',$cliente->id_cliente],'method'=>'DELETE'])!!} 
                                        {!!Form::submit('Eliminar',['class'=>'btn btn-inverse waves-effect waves-light'  ])!!}
                                        {!!Form::close()!!}

                                        @else
                                        {!!link_to_route('cliente.show', $title = 'Restaurar', $parameters =  $cliente->id_cliente, $attributes = ['class'=>'btn btn-info btn-flat btn-addon m-b-10 m-l-5'] )!!} 
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
