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
                                <h4 aling-text='center'>Municipio Registrados. </h4>
                                <td><a class="btn btn-dark btn-outline m-b-10 m-l-5" href="{{route('municipio.create')}}"   role="button"> + Agregar un nuevo municipio</a></td>
                               
                               
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    
                                    <table class="table table-hover ">
                                    <thead>
                                        <tr>
                                                <th>#</th>
                                                <th>Municipio</th>
                                                <th>operaciones</th>  
                                        </tr>    
                                    </thead>
                                    <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Municipio</th>
                                              
                                            </tr>
                                    </tfoot>
                                        @foreach($municipios as $municipio)
                                        <tbody>
                                        <td>{{$municipio->id_municipio}}</td>
                                       <td>{{$municipio->nombre}}</td>
                                       <td>
                                        {!!link_to_route('municipio.edit', $title = 'Editar', $parameters = $municipio->id_municipio, $attributes = ['class'=>'btn btn-success btn-flat btn-addon m-b-10 m-l-5'])!!} 
                                    
                                        {!!Form::open(['route' => ['municipio.destroy',$municipio->id_municipio],'method'=>'DELETE'])!!} 
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