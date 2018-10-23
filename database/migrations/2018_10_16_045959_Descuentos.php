<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Descuentos extends Migration
{
   
    public function up()
    {
		Schema::create('descuentos',function(Blueprint $table)
		{
			$table->increments('id_descuento');
			$table->string('nombre',40);
      $table->double('porcentaje');
      $table->rememberToken();
      $table->timestamps();
			
		});
     
    }

    
    public function down()
    {
       Schema::drop('descuentos');
    }
}
