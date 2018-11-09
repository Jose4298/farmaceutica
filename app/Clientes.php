<?php

namespace Farmaceutic;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clientes extends Model
{
    use SoftDeletes;
    protected $table ='clientes';
    protected $primaryKey = 'id_cliente';
    protected $fillable = ['id_cliente','nombre','apellido_p','apellido_m','calle','colonia','numero','codigo_postal','telefono','email','RFC','id_descuento','id_municipio'];
    protected $hidden ='remember token';
    protected $date = ['deleted_at'];
}
