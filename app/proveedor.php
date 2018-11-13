<?php

namespace Farmaceutic;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class proveedor extends Model
{
    use SoftDeletes;
    protected $table ='proveedores';
    protected $primaryKey = 'id_proveedores';
    protected $fillable = ['id_proveedores','nombre','RFC','calle','colonia','numero','codigo_postal','telefono','email','nombre_contacto','id_municipio'];
    protected $hidden ='remember token';
    protected $date = ['deleted_at'];
}
