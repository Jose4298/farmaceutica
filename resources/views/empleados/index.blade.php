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
                                <h4 aling-text='center'>Empleados  Registrados.. </h4>
                                <td><a class="btn btn-dark btn-outline m-b-10 m-l-5" href="{{route('empleado.create')}}"   role="button"> + Agregar un nuevo empleado</a></td>
                               
                               
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
                                                <th>Imagen<th> 
                                                <th>Operaciones<th> 
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
                                                <th>Imagen<th> 
                                                <th>Operaciones<th> 
                                            </tr>
                                    </tfoot>
                                    @if(count($empleados) > 0)
                                        @foreach($empleados as $empleado)
                                       <tbody>
                                       <td>{{$empleado->id_empleado}}</td>
                                       <td>{{$empleado->nombre}}</td>
                                       <td>{{$empleado->apellido_p}}</td>
                                       <td>{{$empleado->apellido_m}}</td>
                                     
                                       <td>{{$empleado->telefono}}</td>
                                       <td>{{$empleado->email}}</td>
                                       <td>{{$empleado->RFC}}</td>
                                       <td><img src="img_usuario/{{$empleado->archivo}}" alt="" style="width:200px; height:100px;"></td>
                                      
                                       <td>
                                       @if($empleado->deleted_at =="")
                                        {!!link_to_route('empleado.edit', $title = 'Editar', $parameters = $empleado->id_empleado, $attributes = ['class'=>'btn btn-success btn-flat btn-addon m-b-10 m-l-5'])!!} 
                                    
                                        {!!Form::open(['route' => ['empleado.destroy',$empleado->id_empleado],'method'=>'DELETE'])!!} 
                                        {!!Form::submit('Eliminar',['class'=>'btn btn-inverse waves-effect waves-light'  ])!!}
                                        {!!Form::close()!!}
                                   
                                        @else
                                        {!!link_to_route('empleado.show', $title = 'Restaurar', $parameters =  $empleado->id_empleado, $attributes = ['class'=>'btn btn-info btn-flat btn-addon m-b-10 m-l-5'] )!!} 
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
