<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasadors', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('dni');
            $table->string('cuit');
            $table->string('domicilio');
            $table->string('cp');
            $table->double('matricula');
            $table->string('departamento');
            $table->string('provincia');
            $table->string('telefono');
            $table->string('email');
            $table->string('foto');
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
        Schema::dropIfExists('tasadors');
    }
}
