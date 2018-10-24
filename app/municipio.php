<?php

namespace Farmaceutic;

use Illuminate\Database\Eloquent\Model;

class municipio extends Model
{
    protected $table = 'municipios';


    
    protected $primaryKey = 'id_municipio'; 
    protected $fillable=['id_municipio','nombre','id_estado'];
    protected $hidden = ['remember_token'];
}
