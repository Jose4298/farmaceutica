<?php

namespace Farmaceutic;

use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    protected $table ='empleados';
    protected $primaryKey = 'id_empleado';
    protected $fillable = ['id_empleado','nombre','apellido_p','apellido_m','calle','colonia','numero','codigo_postal','telefono','email','RFC','archivo','id_municipio'];
    protected $hidden ='remember token';
}
