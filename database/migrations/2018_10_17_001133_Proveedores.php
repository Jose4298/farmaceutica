<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Proveedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->increments('id_proveedores');
            $table->string('nombre', 150);
			$table->string('RFC', 13);
			$table->string('calle');
			$table->string('colonia');
			$table->integer('numero');
			$table->integer('codigo postal');
			$table->integer('telefono');
			$table->string('email', 150);
			$table->string('nombre_contacto');
			$table->integer('id_municipio')->unsigned();
            $table->foreign('id_municipio')->references('id_municipio')->on('municipios')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('proveedores'); 
    }
}
