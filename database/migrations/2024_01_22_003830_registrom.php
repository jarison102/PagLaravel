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
        Schema::create('registrom', function (Blueprint $table) {
            $table->engine = "InnoDB"; // Establece el motor de almacenamiento de la tabla en InnoDB.
            $table->bigIncrements('id'); // Crea una columna de clave primaria autoincremental de tipo BIGINT
            $table->string('Nombre'); // Crea una columna de tipo VARCHAR para el nombre del libro.
            $table->string('Cilindraje'); // Crea una columna de tipo VARCHAR para el nombre del libro.
            $table->string('Peso'); // Crea una columna de tipo VARCHAR para el nombre del libro.
            $table->string('Potencia_máxima'); // Crea una columna de tipo VARCHAR para el nombre del libro.
            $table->string('Tipo_de_motor'); // Crea una columna de tipo VARCHAR para el nombre del libro.
            $table->string('Arranque'); // Crea una columna de tipo VARCHAR para el nombre del libro.
            $table->string('Sistema_de_reducción_primaria'); // Crea una columna de tipo VARCHAR para el nombre del libro
            $table->string('Luz_principal');
            $table->string('Sistema_de_alimentación');
            $table->timestamps(); // Crea automáticamente columnas de registro de fecha y hora para la creación y actualización.
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
