<?php

namespace Farmaceutic;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class seccion extends Model
{
    use SoftDeletes;
    protected $table = 'secciones';

    protected $primaryKey = 'id_seccion'; 
    protected $fillable=['id_seccion','nombre'];
    protected $hidden = ['remember_token'];
    protected $date = ['deleted_at'];
}
