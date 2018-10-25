<?php

namespace Farmaceutic;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table ='clientes';
    protected $primaryKey = 'id_cliente';
    protected $fillable = ['id_cliente','nombre','apellido_p','apellido_m','calle','colonia','numero','codigo_postal','telefono','email','RFC','id_descuento','id_municipio'];
    protected $hidden ='remember token';
}
