<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Cargo', function (Blueprint $table) {
            $table->engine = "InnoDB"; // Establece el motor de almacenamiento de la tabla en InnoDB.
            $table->bigIncrements('id'); // Crea una columna de clave primaria autoincremental de tipo BIGINT.
            $table->string('Vacante'); // Crea una columna de tipo VARCHAR para el nombre del libro.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
