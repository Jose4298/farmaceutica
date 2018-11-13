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
                                <h4 aling-text='center'>Secciones Registradas. </h4>
                                <td><a class="btn btn-dark btn-outline m-b-10 m-l-5" href="{{route('seccion.create')}}"   role="button"> + Agregar una nueva seccion</a></td>
                               
                               
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    
                                    <table class="table table-hover ">
                                    <thead>
                                        <tr>
                                                <th>#</th>
                                                <th>Seccion</th>
                                                <th>operaciones</th>  
                                        </tr>    
                                    </thead>
                                    <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Seccion</th>
                                                <th>operaciones</th>
                                            </tr>
                                    </tfoot>
                                    @if(count($secciones) > 0)
                                        @foreach($secciones as $seccion)
                                        <tbody>
                                        <td>{{$seccion->id_seccion}}</td>
                                       <td>{{$seccion->nombre}}</td>
                                       <td>
                                       @if($seccion->deleted_at =="")
                                        {!!link_to_route('seccion.edit', $title = 'Editar', $parameters = $seccion->id_seccion, $attributes = ['class'=>'btn btn-success btn-flat btn-addon m-b-10 m-l-5'])!!} 
                                    
                                        {!!Form::open(['route' => ['seccion.destroy',$seccion->id_seccion],'method'=>'DELETE'])!!} 
                                        {!!Form::submit('Eliminar',['class'=>'btn btn-inverse waves-effect waves-light'  ])!!}
                                        {!!Form::close()!!}
                                         
                                        @else
                                        {!!link_to_route('seccion.show', $title = 'Restaurar', $parameters =  $seccion->id_seccion, $attributes = ['class'=>'btn btn-info btn-flat btn-addon m-b-10 m-l-5'] )!!}
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

