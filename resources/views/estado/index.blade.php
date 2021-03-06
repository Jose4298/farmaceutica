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
                                <h4 aling-text='center'>Estados Registrados. </h4>
                                <td><a class="btn btn-dark btn-outline m-b-10 m-l-5" href="{{route('estado.create')}}"   role="button"> + Agregar un nuevo estado</a></td>
                               
                               
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    
                                    <table class="table table-hover ">
                                    <thead>
                                        <tr>
                                                <th>#</th>
                                                <th>Estado</th>
                                                <th>operaciones</th>  
                                        </tr>    
                                    </thead>
                                    <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Estado</th>
                                                <th>operaciones</th>  
                                            </tr>
                                    </tfoot>
                                    @if(count($estados) > 0)
                                        @foreach($estados as $estado)
                                        <tbody>
                                        <td>{{$estado->id_estado}}</td>
                                       <td>{{$estado->nombre}}</td>
                                       <td>
                                       @if($estado->deleted_at =="")
                                        {!!link_to_route('estado.edit', $title = 'Editar', $parameters = $estado->id_estado, $attributes = ['class'=>'btn btn-success btn-flat btn-addon m-b-10 m-l-5'])!!} 
                                    
                                        {!!Form::open(['route' => ['estado.destroy',$estado->id_estado],'method'=>'DELETE'])!!} 
                                        {!!Form::submit('Eliminar',['class'=>'btn btn-inverse waves-effect waves-light'  ])!!}
                                        {!!Form::close()!!}
                                        @else
                                        {!!link_to_route('estado.show', $title = 'Restaurar', $parameters =  $estado->id_estado, $attributes = ['class'=>'btn btn-info btn-flat btn-addon m-b-10 m-l-5'] )!!} 
                                        
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

