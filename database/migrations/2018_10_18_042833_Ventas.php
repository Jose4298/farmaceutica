<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ventas extends Migration
{
   
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('id_venta');
            $table->integer('cantidad');
            $table->date('fecha_pedido');
            $table->date('fecha_entrega');
            $table->integer('numero_de_factura');


            $table->integer('id_empleado')->unsigned();
            $table->integer('id_cliente')->unsigned();
            $table->integer('id_descuento')->unsigned();
            $table->foreign('id_empleado')->references('id_empleado')->on('empleados')->onDelete('cascade');
            $table->foreign('id_cliente')->references('id_cliente')->on('clientes')->onDelete('cascade');
            $table->foreign('id_descuento')->references('id_descuento')->on('descuentos')->onDelete('cascade');
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::drop('ventas');
    }
}
