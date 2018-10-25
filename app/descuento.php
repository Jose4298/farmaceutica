<?php

namespace Farmaceutic;

use Illuminate\Database\Eloquent\Model;

class descuento extends Model
{
    protected $table = 'descuentos';


    
    protected $primaryKey = 'id_descuento'; 
    protected $fillable=['id_descuento','nombre','porcentaje'];
    protected $hidden = ['remember_token'];
}
