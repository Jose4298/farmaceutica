<?php

namespace Farmaceutic;

use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    protected $table ='proveedores';
    protected $primaryKey = 'id_proveedores';
    protected $fillable = ['id_proveedores','nombre','RFC','calle','colonia','numero','codigo_postal','telefono','email','nombre_contacto','id_municipio'];
    protected $hidden ='remember token';
}
