<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntecedentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedentes', function (Blueprint $table) {
            $table->id();
            // $table->date('fecha');
            $table->string('domicilio');
            $table->double('precio');
            $table->double('superficie');
            $table->double('frente');
            $table->double('fondo');
            $table->string('ubicaciongps');
            $table->unsignedBigInteger('propiedad_id')->nullable()->default(0);

            $table->unsignedBigInteger('zona_id');
            $table->unsignedBigInteger('departamento_id');

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

            $table->foreign('zona_id')->references('id')->on('zonas');
            $table->foreign('departamento_id')->references('id')->on('departamentos');
            $table->foreign('propiedad_id')->references('id')->on('propiedads');

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
        Schema::dropIfExists('antecedentes');
    }
}
