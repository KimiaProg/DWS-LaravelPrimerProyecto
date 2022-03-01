<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEditorialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Editorial', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('nacionalidad');
            $table->timestamps();
        });

        Schema::create('Libro', function (Blueprint $table) {
            $table->string('ISBN',13)->primary();
            $table->string('titulo');
            $table->string('autor');
            $table->string('idioma');
            $table->date('publicacion');
           /* $table->unsignedInteger('editorial');
            $table->foreign('editorial')->references('id')->on('Editorial');*/

            $table->foreignId('editorial')->constrained('Editorial');
            $table->timestamps();

        });

        Schema::create('Prestamo', function (Blueprint $table) {
            $table->id();
            $table->string('ISBN',13);
            $table->date('fechaInicio');
            $table->date('fechaFin');

            $table->foreign('ISBN')->references('ISBN')->on('Libro');

            $table->timestamps();

        });

        Schema::create('Peticiones', function (Blueprint $table) {
            $table->id();
            $table->string('nombreApellido');
            $table->string('correoElectronico');
            $table->string('tituloLibro');
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
        Schema::dropIfExists('Editorial');
        Schema::dropIfExists('Libro');

    }
}