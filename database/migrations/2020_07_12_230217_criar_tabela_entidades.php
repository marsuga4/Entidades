<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaEntidades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('entidades', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('cd_cli');
            $table->string('nome');
            $table->integer('cd_atv');
            $table->string('nom_atv');
            $table->integer('cd_nat');
            $table->string('nom_nat');
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
       Schema::dropIfExists('entidades');
    }
}

