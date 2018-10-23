<?php

namespace Farmaceutic;

use Illuminate\Database\Eloquent\Model;

class estado extends Model
{
    protected $table = 'estados';
    protected $primaryKey = 'id_estado'; 
    protected $fillable=['id_estado','nombre'];
    protected $hidden = ['remember_token'];
}
