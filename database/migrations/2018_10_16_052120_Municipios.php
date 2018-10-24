<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Municipios extends Migration
{
  
      public function up()
    {
        Schema::create('municipios', function (Blueprint $table) {
            $table->increments('id_municipio');
            $table->string('nombre');
			
            $table->integer('id_estado')->unsigned();
            $table->foreign('id_estado')->references('id_estado')->on('estados')->onDelete('cascade');
            $table->timestamps();
                $table->rememberToken();   
                $table->softDeletes();
           
        });
    }

   
    public function down()
    {
      Schema::drop('municipios');
    }
}
