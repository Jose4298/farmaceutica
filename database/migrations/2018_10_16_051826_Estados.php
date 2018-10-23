<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Estados extends Migration
{
   
    public function up()
    {
        Schema::create('estados', function (Blueprint $table) {
            $table->increments('id_estado');
		    $table->string('nombre',40);
	
			$table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('estados');
    }
}