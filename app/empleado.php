<?php

namespace Farmaceutic;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class empleado extends Model
{
    use SoftDeletes;
    protected $table ='empleados';
    protected $primaryKey = 'id_empleado';
    protected $fillable = ['id_empleado','nombre','apellido_p','apellido_m','calle','colonia','numero','codigo_postal','telefono','email','RFC','archivo','id_municipio'];
    protected $hidden ='remember token';
    protected $date = ['deleted_at'];
}
