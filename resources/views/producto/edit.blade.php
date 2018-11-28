@extends('layouts.principal')
@section('content')

{{csrf_field()}}

{!!Form::model($producto,['route' => ['producto.update',$producto->id_producto],'method'=>'PUT','enctype' => 'multipart/form-data','files'=>'true'])!!}



<div class="row justify-content-center">
     <div class="col-lg-6">
        <div class="card  ">
        <div class="card-body ">
        <h4 class="page-header">Ingresar un nuevo producto.</h4>
        <form class="form p-t-20">

<div class="form-group">
        <div class="form-group row ">
                <label class="col-sm-2 control-label" >ID. <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('id_producto',null,['class'=>'form-control', 'placeholder'=>'Colocar el Nombre del Estado.', 'readonly' => 'readonly'])!!}
            </div>
            </div>


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
                <label class="col-sm-2 control-label" >Precio <span class="text-danger">*</span></label>
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
                <label class="col-sm-2 control-label" >Cantidad MAX  <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('max_bodega',null,['class'=>'form-control', 'placeholder'=>'Coloca la cantidad maxima del producto.'])!!}
                
            </div>
                @if($errors->first('max_bodega')) 
                <i> {{ $errors->first('max_bodega') }} </i> 
                @endif	<br>
            </div> 
              
          <div class="form-group row ">
            <label class="col-sm-2 control-label" >Cantidad MIN  <span class="text-danger">*</span></label>
            <div class="input-group">
            <div class="input-group-addon"><i class="ti-location-pin"></i></div>
            {!!Form::text('min_bodega',null,['class'=>'form-control', 'placeholder'=>'Coloca la cantidad minima del producto.'])!!}
            
        </div>
            @if($errors->first('min_bodega')) 
            <i> {{ $errors->first('min_bodega') }} </i> 
            @endif	<br>
        </div> 
        
        <div class="form-group row ">
            <label class="col-sm-2 control-label" >PUNTO MEDIO BODEGA <span class="text-danger">*</span></label>
            <div class="input-group">
            <div class="input-group-addon"><i class="ti-location-pin"></i></div>
            {!!Form::text('punto_m_bodega',null,['class'=>'form-control', 'placeholder'=>'Colocar el punto medio en bodega del producto.'])!!}
            
        </div>
            @if($errors->first('punto_m_bodega')) 
            <i> {{ $errors->first('punto_m_bodega') }} </i> 
            @endif	<br>
        </div>
        <div class="form-group row ">
            <label class="col-lg-4 col-form-label" >Imagen. <span class="text-danger">*</span></label>
            <div class="input-group">
            <img src="{{asset('img_usuario/'.$producto->archivo)}}"
            height=150 width=250>
            <div class="input-group-addon"><i class="ti-user"></i></div>
            <input type="file" id="img" name="img">
        </div>
        <div>
        </div>
        @if($errors->first('img')) 
        <i> {{ $errors->first('img') }} </i> 
        @endif	<br>
        </div>
        
        <div class="form-group has-warning has-feedback">
            <label class="col-sm-2 control-label">Seccion</label>
            <div class="col-sm-4">
                <select class="form-control custom-select" name='id_seccion'>
                   <option value ='{{$id_seccion}}'>{{$secciones}}</option>
                    @foreach ($demassecciones as $seccion)
                <option value='{{$seccion->id_seccion}}'>{{$seccion->nombre}}

                        </option>
                    @endforeach
                </select>
            </div>
        </div>
     </form>
     <br>
     <br>
     {!!Form::submit('Actualizar',[' class'=>'btn btn-success waves-effect waves-light m-r-10'])!!}
   
    </div>
    </div>
    </div>
</div>  
{!!Form::close()!!}
@stop