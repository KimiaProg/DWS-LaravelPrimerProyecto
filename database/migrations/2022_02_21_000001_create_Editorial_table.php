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
            $table->text('abilities')->nullable();
            $table->timestamps();
        });

        Schema::create('Libro', function (Blueprint $table) {
            $table->id();
            $table->integer('ISBN');
            $table->string('titulo');
            $table->string('autor');
            $table->string('idioma');
            $table->date('publicacion');
            $table->string('editorial');
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
