@extends('layouts.principal')
@section('content')

{{csrf_field()}}

{!!Form::model($seccion,['route' => ['seccion.update',$seccion->id_seccion],'method'=>'PUT'])!!}

<div class="row justify-content-center">
     <div class="col-lg-6">
        <div class="card  ">
        <div class="card-body ">
        <h4 class="card-title">Ingresar una nueva seccion.</h4>
        <form class="form p-t-20">

   <div class="form-group">
        <div class="form-group row ">
                <label class="col-lg-4 col-form-label" >ID. <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('id_seccion',null,['class'=>'form-control', 'placeholder'=>'Colocar el id de la seccion.', 'readonly' => 'readonly'])!!}
            </div>
            </div>

            <div class="form-group row ">
                <label class="col-lg-4 col-form-label" >Nombre <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Colocar el Nombre de la seccion.'])!!}
                
            </div>
                @if($errors->first('nombre')) 
                <i> {{ $errors->first('nombre') }} </i> 
                @endif	<br>
     </div> 

    
     </form>
     {!!Form::submit('Actualizar',[' class'=>'btn btn-success waves-effect waves-light m-r-10'])!!}
    
    </div>
    </div>
    </div>
</div>  
{!!Form::close()!!}
@stop