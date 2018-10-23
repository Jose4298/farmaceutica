<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clientes extends Migration
{
   
    public function up()
    {
		Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id_cliente');
            $table->string('nombre', 150);
			$table->string('apellido_p');
			$table->string('apellido_m');
			$table->string('calle');
			$table->string('colonia');
			$table->integer('numero');
			$table->integer('codigo postal');
			$table->integer('telefono');
			$table->string('email', 150);
			$table->string('RFC', 13);
			
            $table->integer('id_descuento')->unsigned();
			$table->integer('id_municipio')->unsigned();
            $table->foreign('id_descuento')->references('id_descuento')->on('descuentos')->onDelete('cascade');
            $table->foreign('id_municipio')->references('id_municipio')->on('municipios')->onDelete('cascade');
            $table->timestamps();
        });
       
    }

    
    public function down()
    {
		Schema::drop('clientes');
       
    }
}
