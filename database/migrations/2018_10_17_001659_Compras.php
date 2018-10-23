<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Compras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->increments('id_compras');
            $table->integer('cantidad');
            $table->date('fecha_pedido');
            $table->date('fecha_entrega');
            $table->integer('numero_de_factura');


            $table->integer('id_empleado')->unsigned();
			$table->integer('id_proveedores')->unsigned();
            $table->foreign('id_empleado')->references('id_empleado')->on('empleados')->onDelete('cascade');
            $table->foreign('id_proveedores')->references('id_proveedores')->on('proveedores')->onDelete('cascade');
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
        Schema::drop('compras');
    }
}
