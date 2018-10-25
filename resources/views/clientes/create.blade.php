@extends('layouts.principal')
@section('content')

{{csrf_field()}}

{!!Form::open(['route'=>'cliente.store', 'method'=>'POST'])!!}



<div class="row justify-content-center">
     <div class="col-lg-6">
        <div class="card  ">
        <div class="card-body ">
        <h4 class="page-header">Ingresar un nuevo cliente.</h4>
        <form class="form p-t-20">

            <div class="form-group row ">
                <label class="col-sm-2 control-label" >Nombre <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Colocar el Nombre del producto.'])!!}
                
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
                {!!Form::text('apellido_p',null,['class'=>'form-control', 'placeholder'=>'Colocar el precio del producto.'])!!}
                
            </div>
                @if($errors->first('precio')) 
                <i> {{ $errors->first('precio') }} </i> 
                @endif	<br>
            </div> 
<!--AQUI TERMINA -->
<!-- ESTA ES LA PARTE COMPLETA DE UNA SECCION DEL CAMPO-->
<div class="form-group row ">
                <label class="col-sm-2 control-label" >Apellido Materno<span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('apellido_m',null,['class'=>'form-control', 'placeholder'=>'Colocar el precio del producto.'])!!}
                
            </div>
                @if($errors->first('precio')) 
                <i> {{ $errors->first('precio') }} </i> 
                @endif	<br>
            </div> 
<!--AQUI TERMINA -->
<!-- ESTA ES LA PARTE COMPLETA DE UNA SECCION DEL CAMPO-->
<div class="form-group row ">
                <label class="col-sm-2 control-label" >Calle<span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('calle',null,['class'=>'form-control', 'placeholder'=>'Colocar el precio del producto.'])!!}
                
            </div>
                @if($errors->first('precio')) 
                <i> {{ $errors->first('precio') }} </i> 
                @endif	<br>
            </div> 
<!--AQUI TERMINA -->
<!-- ESTA ES LA PARTE COMPLETA DE UNA SECCION DEL CAMPO-->
<div class="form-group row ">
                <label class="col-sm-2 control-label" >Colonia <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('colonia',null,['class'=>'form-control', 'placeholder'=>'Colocar el precio del producto.'])!!}
                
            </div>
                @if($errors->first('precio')) 
                <i> {{ $errors->first('precio') }} </i> 
                @endif	<br>
            </div> 
<!--AQUI TERMINA -->
<!-- ESTA ES LA PARTE COMPLETA DE UNA SECCION DEL CAMPO-->
<div class="form-group row ">
                <label class="col-sm-2 control-label" >numero <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('numero',null,['class'=>'form-control', 'placeholder'=>'Colocar el precio del producto.'])!!}
                
            </div>
                @if($errors->first('precio')) 
                <i> {{ $errors->first('precio') }} </i> 
                @endif	<br>
            </div> 
<!--AQUI TERMINA -->
<!-- ESTA ES LA PARTE COMPLETA DE UNA SECCION DEL CAMPO-->
<div class="form-group row ">
                <label class="col-sm-2 control-label" >codigo postal <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('codigo_postal',null,['class'=>'form-control', 'placeholder'=>'Colocar el precio del producto.'])!!}
                
            </div>
                @if($errors->first('precio')) 
                <i> {{ $errors->first('precio') }} </i> 
                @endif	<br>
            </div> 
<!--AQUI TERMINA -->
<!-- ESTA ES LA PARTE COMPLETA DE UNA SECCION DEL CAMPO-->
<div class="form-group row ">
                <label class="col-sm-2 control-label" >telefono <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('telefono',null,['class'=>'form-control', 'placeholder'=>'Colocar el precio del producto.'])!!}
                
            </div>
                @if($errors->first('precio')) 
                <i> {{ $errors->first('precio') }} </i> 
                @endif	<br>
            </div> 
<!--AQUI TERMINA -->
            <!-- ESTA ES LA PARTE COMPLETA DE UNA SECCION DEL CAMPO-->
            <div class="form-group row ">
                <label class="col-sm-2 control-label" >Email <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('email',null,['class'=>'form-control', 'placeholder'=>'Colocar el precio del producto.'])!!}
                
            </div>
                @if($errors->first('precio')) 
                <i> {{ $errors->first('precio') }} </i> 
                @endif	<br>
            </div> 
<!--AQUI TERMINA -->
<!-- ESTA ES LA PARTE COMPLETA DE UNA SECCION DEL CAMPO-->
<div class="form-group row ">
                <label class="col-sm-2 control-label" >RFC <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('RFC',null,['class'=>'form-control', 'placeholder'=>'Colocar el precio del producto.'])!!}
                
            </div>
                @if($errors->first('precio')) 
                <i> {{ $errors->first('precio') }} </i> 
                @endif	<br>
            </div> 
<!--AQUI TERMINA -->
         
        
        <div class="form-group has-warning has-feedback">
            <label class="col-sm-2 control-label">Descuento</label>
            <div class="col-sm-4">
                <select class="form-control custom-select" name='id_descuento'>
                    @foreach ($descuentos as $descuento)
                <option value="{{$descuento['id_descuento']}}">{{$descuento['porcentaje']}}
 


                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group has-warning has-feedback">
            <label class="col-sm-2 control-label">Municipio</label>
            <div class="col-sm-4">
                <select class="form-control custom-select" name='id_municipio'>
                    @foreach ($municipios as $municipio)
                <option value="{{$municipio['id_municipio']}}">{{$municipio['nombre']}}
 

 
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
     </form>
     {!!Form::submit('Guardar',[' class'=>'btn btn-success waves-effect waves-light m-r-10'])!!}
     {!!Form::reset('Cancelar',[' class'=>'btn btn-inverse waves-effect waves-light'])!!}
    </div>
    </div>
    </div>
</div>  
{!!Form::close()!!}
@stop