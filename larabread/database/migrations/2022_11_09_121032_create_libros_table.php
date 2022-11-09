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
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 20);
            $table->string('autor', 50);
            $table->integer('paginas');
            $table->string('genero', 50);
            $table->date('f_publicacion')->nullable();
            $table->timestamps();
        });
    }

    /**Libro: id, titulo, autor, paginas, genero, f_publicacion
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros');
    }
};
