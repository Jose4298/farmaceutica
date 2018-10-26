<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Productos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
        $table->increments('id_producto');
            $table->string('nombre',50);
            $table->double('precio');
            $table->integer('max_bodega');
            $table->integer('min_bodega');
            $table->integer('punto_m_bodega');
            $table->string('archivo',350);
            $table->integer('id_seccion')->unsigned();
            $table->foreign('id_seccion')->references('id_seccion')->on('secciones')->onDelete('cascade');
            $table->timestamps();
                $table->rememberToken();   
                $table->softDeletes();
        });
    }

   
    public function down()
    {
        Schema::drop('productos');
    }
}
