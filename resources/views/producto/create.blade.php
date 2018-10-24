@extends('layouts.principal')
@section('content')

{{csrf_field()}}

{!!Form::open(['route'=>'producto.store', 'method'=>'POST'])!!}



<div class="row justify-content-center">
     <div class="col-lg-6">
        <div class="card  ">
        <div class="card-body ">
        <h4 class="card-title">Ingresar un nuevo producto.</h4>
        <form class="form p-t-20">

            <div class="form-group row ">
                <label class="col-lg-4 col-form-label" >Nombre <span class="text-danger">*</span></label>
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
                <label class="col-lg-4 col-form-label" >Precio <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('precio',null,['class'=>'form-control', 'placeholder'=>'Colocar el precio del producto.'])!!}
                
            </div>
                @if($errors->first('precio')) 
                <i> {{ $errors->first('precio') }} </i> 
                @endif	<br>
            </div> 
<!--AQUI TERMINA -->
            
          <div class="form-group row ">
                <label class="col-lg-4 col-form-label" >Cantidad MAX  <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('max_bodega',null,['class'=>'form-control', 'placeholder'=>'Coloca la cantidad maxima del producto.'])!!}
                
            </div>
                @if($errors->first('max_bodega')) 
                <i> {{ $errors->first('max_bodega') }} </i> 
                @endif	<br>
            </div> 
              
          <div class="form-group row ">
            <label class="col-lg-4 col-form-label" >Cantidad MIN  <span class="text-danger">*</span></label>
            <div class="input-group">
            <div class="input-group-addon"><i class="ti-location-pin"></i></div>
            {!!Form::text('min_bodega',null,['class'=>'form-control', 'placeholder'=>'Coloca la cantidad minima del producto.'])!!}
            
        </div>
            @if($errors->first('min_bodega')) 
            <i> {{ $errors->first('min_bodega') }} </i> 
            @endif	<br>
        </div> 
        
        <div class="form-group row ">
            <label class="col-lg-4 col-form-label" >PUNTO MEDIO BODEGA <span class="text-danger">*</span></label>
            <div class="input-group">
            <div class="input-group-addon"><i class="ti-location-pin"></i></div>
            {!!Form::text('punto_m_bodega',null,['class'=>'form-control', 'placeholder'=>'Colocar el punto medio en bodega del producto.'])!!}
            
        </div>
            @if($errors->first('punto_m_bodega')) 
            <i> {{ $errors->first('punto_m_bodega') }} </i> 
            @endif	<br>
        </div>

        
        
        <div class="row form-group">
                <label class="col-lg-4 col-form-label" >SECCION. <span class="text-danger">*</span></label>
            <div class="col-sm-12">
                <select class="form-control custom-select" name='id_seccion'>
                    @foreach ($secciones as $seccion)
                <option value="{{$seccion['id_seccion']}}">{{$seccion['seccion']}}

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