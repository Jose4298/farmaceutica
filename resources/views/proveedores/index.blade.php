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
                                <h4 aling-text='center'>Proveedores  Registrados.. </h4>
                                <td><a class="btn btn-dark btn-outline m-b-10 m-l-5" href="{{route('proveedores.create')}}"   role="button"> + Agregar un nuevo proveedor</a></td>
                               
                               
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    
                                    <table class="table table-hover ">
                                    <thead>
                                        <tr>
                                                <th>#</th>
                                                <th>Nombre</th>
                                                <th>RFC</th>  
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
                                                <th>RFC</th>  
                                                <th>Telefono</th> 
                                                <th>Correo</th>
                                                
                                            </tr>
                                    </tfoot>
                                        @foreach($proveedores as $proveedor)
                                       <tbody>
                                       <td>{{$proveedor->id_proveedores}}</td>
                                       <td>{{$proveedor->nombre}}</td>
                                       <td>{{$proveedor->RFC}}</td>
                                     
                                       <td>{{$proveedor->telefono}}</td>
                                       <td>{{$proveedor->email}}</td>
                                       
                                      
                                       <td>
                                        {!!link_to_route('proveedor.edit', $title = 'Editar', $parameters = $proveedor->id_proveedores, $attributes = ['class'=>'btn btn-success btn-flat btn-addon m-b-10 m-l-5'])!!} 
                                    
                                        {!!Form::open(['route' => ['proveedor.destroy',$proveedor->id_proveedor],'method'=>'DELETE'])!!} 
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
