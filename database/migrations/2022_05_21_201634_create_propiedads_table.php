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
            $table->double('registrodepropiedad')->default(0);
            $table->double('nomenclaturacatastral');
            $table->string('nroplano');
            $table->string('ubicaciongps')->default(0);
            $table->string('frente')->default(0);
            $table->string('fondo')->default(0);
            
            // REVISAR
            // $table->unsignedBigInteger('poseedor_id');
            $table->unsignedBigInteger('departamento_id')->default(1);
            // $table->unsignedBigInteger('antecedente_id');
            $table->unsignedBigInteger('tipoinmueble_id')->default(1);
            $table->unsignedBigInteger('zona_id')->default(1);
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
