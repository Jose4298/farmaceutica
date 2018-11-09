<?php

namespace Farmaceutic;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class estado extends Model
{
    use SoftDeletes;
    // nombre de la tabla 
    protected $table = 'estados';


    
    protected $primaryKey = 'id_estado'; 
    protected $fillable=['id_estado','nombre'];
    protected $hidden = ['remember_token'];
    protected $date = ['deleted_at'];
}
