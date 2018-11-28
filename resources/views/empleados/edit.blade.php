@extends('layouts.principal')
@section('content')

{{csrf_field()}}

{!!Form::model($empleados,['route' => ['empleado.update',$empleados->id_empleado],'method'=>'PUT','enctype' => 'multipart/form-data','files'=>'true'])!!}



<div class="row justify-content-center">
     <div class="col-lg-6">
        <div class="card  ">
        <div class="card-body ">
        <h4 class="page-header">Ingresar un nuevo empleado.</h4>
        <form class="form p-t-20">

        <div class="form-group">
        <div class="form-group row ">
                <label class="col-sm-2 control-label" >ID <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('id_empleado',null,['class'=>'form-control', 'placeholder'=>'Colocar el Nombre del empleado.', 'readonly' => 'readonly'])!!}
            </div>
            </div>

            <div class="form-group row ">
                <label class="col-sm-2 control-label" >Nombre <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Colocar el Nombre del Empleado.'])!!}
                
            </div> <!-- ESTA PARTE SIRVE PARA LA VALIDACIÓN -->
                @if($errors->first('nombre')) 
                <i> {{ $errors->first('nombre') }} </i> 
                @endif	<br>
            </div> 
<!-- ESTA ES LA PARTE COMPLETA DE UNA SECCION DEL CAMPO-->
            <div class="form-group row ">
                <label class="col-sm-2 control-label" >Apellido Paterno <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('apellido_p',null,['class'=>'form-control', 'placeholder'=>'Coloca el apellido paterno.'])!!}
                
            </div>
                @if($errors->first('apellido_p')) 
                <i> {{ $errors->first('apellido_p') }} </i> 
                @endif	<br>
            </div> 
<!--AQUI TERMINA -->
<!-- ESTA ES LA PARTE COMPLETA DE UNA SECCION DEL CAMPO-->
<div class="form-group row ">
                <label class="col-sm-2 control-label" >Apellido Materno<span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('apellido_m',null,['class'=>'form-control', 'placeholder'=>'Coloca el apellido meterno.'])!!}
                
            </div>
                @if($errors->first('apellido_m')) 
                <i> {{ $errors->first('apellido_m') }} </i> 
                @endif	<br>
            </div> 
<!--AQUI TERMINA -->
<!-- ESTA ES LA PARTE COMPLETA DE UNA SECCION DEL CAMPO-->
<div class="form-group row ">
                <label class="col-sm-2 control-label" >Calle<span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('calle',null,['class'=>'form-control', 'placeholder'=>'Coloca la calle.'])!!}
                
            </div>
                @if($errors->first('calle')) 
                <i> {{ $errors->first('calle') }} </i> 
                @endif	<br>
            </div> 
<!--AQUI TERMINA -->
<!-- ESTA ES LA PARTE COMPLETA DE UNA SECCION DEL CAMPO-->
<div class="form-group row ">
                <label class="col-sm-2 control-label" >Colonia <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('colonia',null,['class'=>'form-control', 'placeholder'=>'Coloca la colonia.'])!!}
                
            </div>
                @if($errors->first('colonia')) 
                <i> {{ $errors->first('colonia') }} </i> 
                @endif	<br>
            </div> 
<!--AQUI TERMINA -->
<!-- ESTA ES LA PARTE COMPLETA DE UNA SECCION DEL CAMPO-->
<div class="form-group row ">
                <label class="col-sm-2 control-label" >Número <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('numero',null,['class'=>'form-control', 'placeholder'=>'Coloca el número.'])!!}
                
            </div>
                @if($errors->first('numero')) 
                <i> {{ $errors->first('numero') }} </i> 
                @endif	<br>
            </div> 
<!--AQUI TERMINA -->
<!-- ESTA ES LA PARTE COMPLETA DE UNA SECCION DEL CAMPO-->
<div class="form-group row ">
                <label class="col-sm-2 control-label" >Codigo postal <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('codigo_postal',null,['class'=>'form-control', 'placeholder'=>'Coloca el codigo postal.'])!!}
                
            </div>
                @if($errors->first('codigo_postal')) 
                <i> {{ $errors->first('codigo_postal') }} </i> 
                @endif	<br>
            </div> 
<!--AQUI TERMINA -->
<!-- ESTA ES LA PARTE COMPLETA DE UNA SECCION DEL CAMPO-->
<div class="form-group row ">
                <label class="col-sm-2 control-label" >Telefono <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('telefono',null,['class'=>'form-control', 'placeholder'=>'Coloca el telefono.'])!!}
                
            </div>
                @if($errors->first('telefono')) 
                <i> {{ $errors->first('telefono') }} </i> 
                @endif	<br>
            </div> 
<!--AQUI TERMINA -->
            <!-- ESTA ES LA PARTE COMPLETA DE UNA SECCION DEL CAMPO-->
            <div class="form-group row ">
                <label class="col-sm-2 control-label" >Email <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('email',null,['class'=>'form-control', 'placeholder'=>'Coloca el email.'])!!}
                
            </div>
                @if($errors->first('email')) 
                <i> {{ $errors->first('email') }} </i> 
                @endif	<br>
            </div> 
<!--AQUI TERMINA -->
<!-- ESTA ES LA PARTE COMPLETA DE UNA SECCION DEL CAMPO-->
<div class="form-group row ">
                <label class="col-sm-2 control-label" >RFC <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('RFC',null,['class'=>'form-control', 'placeholder'=>'Coloca el RFC.'])!!}
                
            </div>
                @if($errors->first('RFC')) 
                <i> {{ $errors->first('RFC') }} </i> 
                @endif	<br>
            </div> 
<!--AQUI TERMINA -->
         
        
        </div>



        <div class="form-group has-warning has-feedback">
            <label class="col-sm-2 control-label">Municipio</label>
            <div class="col-sm-4">
                 <select class="form-control " name='id_municipio'>
                                                <option value = '{{$id_municipio}}'> {{$municipios}}</option>
                                                @foreach ($demasmunicipios as $municipio)
                                            <option value='{{$municipio->id_municipio}}'>{{$municipio->nombre}}
    
                                                    </option>
                                                @endforeach
                                            </select>
        </div>
        </div>
        <div class="form-group row ">
            <label class="col-lg-4 col-form-label" >Imagen. <span class="text-danger">*</span></label>
            <div class="input-group">
            <img src="{{asset('img_usuario/'.$empleados->archivo)}}"
            height=150 width=250>
            <br>
            <div class="input-group-addon"><i class="ti-user"></i></div>
            <input type="file" id="img" name="img">
        </div>
        <div>
        </div>
        @if($errors->first('img')) 
        <i> {{ $errors->first('img') }} </i> 
        @endif	<br>
        </div>
        <br>
        <br>
        <br>
     </form>
     {!!Form::submit('Actualizar',[' class'=>'btn btn-success waves-effect waves-light m-r-10'])!!}
    </div>
    </div>
    </div>
</div>  
{!!Form::close()!!}
@stop