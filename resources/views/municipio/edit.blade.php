@extends('layouts.principal')
@section('content')


{{csrf_field()}}


{!!Form::model($municipios,['route' => ['municipio.update',$municipios->id_municipio],'method'=>'PUT'])!!}


<div class="row justify-content-center">
     <div class="col-lg-6">
        <div class="card  ">
        <div class="card-body ">
        <h4 class="card-title">Ingresar un nuevo Municipio.</h4>
        <form class="form p-t-20">

         <div class="form-group">
        <div class="form-group row ">
                <label class="col-lg-4 col-form-label" >ID. <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('id_municipio',null,['class'=>'form-control', 'placeholder'=>'Colocar el Nombre del Municipio.', 'readonly' => 'readonly'])!!}
            </div>
            </div>

            <div class="form-group row ">
                <label class="col-lg-4 col-form-label" >Nombre <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Colocar el Nombre del Municipio.'])!!}
                
            </div>
                @if($errors->first('nombre')) 
                <i> {{ $errors->first('nombre') }} </i> 
                @endif	<br>
     </div> 
     <div class="row form-group">
                <label class="col-lg-4 col-form-label" >Estado. <span class="text-danger">*</span></label>
            <div class="col-sm-12">
                <select class="form-control custom-select" name='id_estado'>
                    @foreach ($estados as $estado)
                <option value="{{$estado['id_estado']}}">{{$estado['nombre']}}

                        </option>
                    @endforeach

                </select>
                </div>
                @if($errors->first('id_estado')) 
                <i> {{ $errors->first('id_estado') }} </i> 
                @endif	<br>
            </div>
        </div>

    
     </form>
     {!!Form::submit('Actualizar',[' class'=>'btn btn-success waves-effect waves-light m-r-10'])!!}
    </div>
    </div>
    </div>
</div>  
 
{!!Form::close()!!}
@endsection