<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropiedadtasacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propiedadtasacions', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('tasacion_id');
            $table->foreign('tasacion_id')->references('id')->on('tasacions');
            
            $table->unsignedBigInteger('propiedad_id');
            $table->foreign('propiedad_id')->references('id')->on('propiedads');

            $table->integer('coeficiente_esquinas');
            $table->integer('coeficiente_formas');
            $table->integer('coeficiente_topografias');
            $table->integer('coeficiente_pavimentoyservicios');
            $table->integer('coeficiente_ubicaciones');
            $table->integer('coeficiente_ofertas');
            $table->integer('coeficiente_formapagos');
            $table->integer('coeficiente_fuenteinformantes');
            $table->integer('coeficiente_actualizaciones');
            $table->double('precionormalizado');
            $table->double('coeficientenormalizado');

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
        Schema::dropIfExists('propiedadtasacions');
    }
}
