<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComitentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comitentes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->double('cuit');
            $table->string('domicilio');
            $table->string('departamento');
            $table->string('provincia');
            $table->string('pais');
            $table->string('cp');
            $table->string('telefono');
            $table->string('email');
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
        Schema::dropIfExists('comitentes');
    }
}
