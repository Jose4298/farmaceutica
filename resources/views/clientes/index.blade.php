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
                                <td><a class="btn btn-dark btn-outline m-b-10 m-l-5" href="{{route('cliente.create')}}"   role="button"> + Agregar un nuevo estado</a></td>
                               
                               
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
                                        </tr>    
                                    </thead>
                                    <tfoot>
                                            <tr>
                                            <th>#</th>
                                            <th>#</th>
                                                <th>Nombre</th>
                                                <th>Apellido Paterno</th>
                                                <th>Apellido Materno</th>
                                                <th>Telefono</th> 
                                                <th>Correo</th>
                                                <th>RFC</th> 
                                            </tr>
                                    </tfoot>
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
                                        {!!link_to_route('cliente.edit', $title = 'Editar', $parameters = $cliente->id_cliente, $attributes = ['class'=>'btn btn-success btn-flat btn-addon m-b-10 m-l-5'])!!} 
                                    
                                        {!!Form::open(['route' => ['cliente.destroy',$cliente->id_cliente],'method'=>'DELETE'])!!} 
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
