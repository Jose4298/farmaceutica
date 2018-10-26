<?php

namespace Farmaceutic;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $table = 'productos';


    
    protected $primaryKey = 'id_producto'; 
    protected $fillable=['id_producto','nombre','precio','max_bodega','min_bodega','punto_m_bodega', 'archivo','id_seccion'];
    protected $hidden = ['remember_token'];
}
