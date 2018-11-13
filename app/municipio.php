<?php

namespace Farmaceutic;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class municipio extends Model
{
    use SoftDeletes;
    protected $table = 'municipios';


    
    protected $primaryKey = 'id_municipio'; 
    protected $fillable=['id_municipio','nombre','id_estado'];
    protected $hidden = ['remember_token'];
    protected $date = ['deleted_at'];
}
