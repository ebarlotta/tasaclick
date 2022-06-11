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
            $table->double('registrodePropiedad');
            $table->double('nomenclaturacatastral');
            $table->string('nroplano');
            $table->string('ubicaciongps');
            
            // REVISAR
            // $table->unsignedBigInteger('poseedor_id');
            $table->unsignedBigInteger('departamento_id');
            // $table->unsignedBigInteger('antecedente_id');
            $table->unsignedBigInteger('tipoinmueble_id');
            $table->unsignedBigInteger('zona_id');
            // REVISAR
            // $table->foreign('poseedor_id')->references('id')->on('poseedors');
            $table->foreign('departamento_id')->references('id')->on('departamentos');
            // $table->foreign('antecedente_id')->references('id')->on('antecedentes');
            $table->foreign('tipoinmueble_id')->references('id')->on('tipoinmuebles');
            $table->foreign('zona_id')->references('id')->on('zonas');

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
