<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasacions', function (Blueprint $table) {
            $table->id();
            $table->date('fechatasacion');
            $table->double('preciofinal')->nullable();

            $table->unsignedBigInteger('propiedad_id');
            $table->foreign('propiedad_id')->references('id')->on('propiedads');

            $table->unsignedBigInteger('tasador_id');
            $table->foreign('tasador_id')->references('id')->on('tasadors');

            $table->unsignedBigInteger('empresa_id');
            $table->foreign('empresa_id')->references('id')->on('empresas');

            $table->unsignedBigInteger('fin_id');
            $table->foreign('fin_id')->references('id')->on('fins');

            $table->unsignedBigInteger('comitente_id');
            $table->foreign('comitente_id')->references('id')->on('comitentes');

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
        Schema::dropIfExists('tasacions');
    }
}
