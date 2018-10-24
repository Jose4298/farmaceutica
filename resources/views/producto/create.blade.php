@extends('layouts.principal')
@section('content')

{{csrf_field()}}

{!!Form::open(['route'=>'producto.store', 'method'=>'POST'])!!}



<div class="row justify-content-center">
     <div class="col-lg-6">
        <div class="card  ">
        <div class="card-body ">
        <h4 class="card-title">Ingresar un nuevo Producto.</h4>
        <form class="form p-t-20">

            <div class="form-group row ">
                <label class="col-lg-4 col-form-label" >Nombre <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Colocar el Nombre del Producto.'])!!}
                
            </div>
            <div class="form-group row ">
                <label class="col-lg-4 col-form-label" >Precio <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('precio',null,['class'=>'form-control', 'placeholder'=>'Coloca el precio'])!!}
                
            </div>
            <div class="form-group row ">
                <label class="col-lg-4 col-form-label" >Maximo en bodega <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('max_bodega',null,['class'=>'form-control', 'placeholder'=>'Coloca el maximo en bodega'])!!}
                
            </div>
            <div class="form-group row ">
                <label class="col-lg-4 col-form-label" >Minimo en bodega <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('min_bodega',null,['class'=>'form-control', 'placeholder'=>'Coloca el minimo en bodega'])!!}
                
            </div>
            <div class="form-group row ">
                <label class="col-lg-4 col-form-label" >Punto medio en bodega <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('punto_m_bodega',null,['class'=>'form-control', 'placeholder'=>'Coloca el punto medio en bodega'])!!}
                
            </div>
                @if($errors->first('nombre')) 
                <i> {{ $errors->first('nombre') }} </i> 
                @endif	<br>
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