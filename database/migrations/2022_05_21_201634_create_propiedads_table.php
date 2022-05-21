<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropiedadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propiedads', function (Blueprint $table) {
            $table->id();
            $table->string('domicilio');
            $table->string('padron');
            $table->string('padronmunicipal');
            $table->string('titularregistral');
            $table->string('poseedor');
            $table->double('registrodePropiedad');
            $table->double('nomenclaturacatastral');
            $table->string('nroplano');
            $table->string('provincia');
            $table->string('departamento');
            $table->string('cp');
            $table->unsignedBigInteger('tipoinmuebles_id');
            $table->unsignedBigInteger('zona_id');

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
        Schema::dropIfExists('propiedads');
    }
}
