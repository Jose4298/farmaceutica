<?php

namespace Farmaceutic;

use Illuminate\Database\Eloquent\Model;

class seccion extends Model
{
    protected $table = 'secciones';

    protected $primaryKey = 'id_seccion'; 
    protected $fillable=['id_seccion','nombre'];
    protected $hidden = ['remember_token'];
}
