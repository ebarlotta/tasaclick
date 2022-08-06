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
            $table->date('fecha');
            $table->string('direccion');
            $table->double('precio');
            $table->double('superficie');
            $table->double('frente');
            $table->double('fondo');
            $table->string('ubicaciongps');

            $table->unsignedBigInteger('zona_id');
            $table->unsignedBigInteger('departamento_id');

            $table->foreign('zona_id')->references('id')->on('zonas');
            $table->foreign('departamento_id')->references('id')->on('departamentos');

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
