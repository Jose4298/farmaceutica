<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Secciones extends Migration
{
   
    public function up()
    {
		Schema::create('secciones',function(Blueprint $table)
		{
			$table->increments('id_seccion');
			$table->string('nombre',50);
		});
    }

    
    public function down()
    {
        Schema::drop('secciones');
    }
}
