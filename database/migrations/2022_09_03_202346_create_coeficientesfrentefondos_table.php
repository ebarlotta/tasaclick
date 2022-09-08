<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoeficientesfrentefondosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coeficientesfrentefondos', function (Blueprint $table) {
            $table->id();
            $table->string('columna');
            $table->string('fila');
            $table->double('coeficiente');
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
        Schema::dropIfExists('coeficientesfrentefondos');
    }
}
