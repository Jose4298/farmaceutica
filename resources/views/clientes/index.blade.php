@extends('layouts.principal')
@section('content')

<div class="col-xs-12 col-sm-6">
    <div class="box">
        <div class="box-header">
            <div class="box-name">
                <i class="fa fa-table"></i>
                <span>Hover rows</span>
            </div>
            <div class="box-icons">
                <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                </a>
                <a class="expand-link">
                    <i class="fa fa-expand"></i>
                </a>
                <a class="close-link">
                    <i class="fa fa-times"></i>
                </a>
            </div>
            <div class="no-move"></div>
        </div>
        <div class="box-content">
            <p>Add <code>.table-hover</code> to enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.</p>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Calle</th>
                        <th>Colonia</th>
                        <th>Numero</th>
                        <th>Codigo postal</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>RFC</th>
                        <th>ID_Descuento</th>
                        <th>ID_Descuento</th>
                        
                    </tr>
                </thead>
                <tbody>
                   

                   
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection