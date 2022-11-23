<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *Pasaje
*id: autonumérico
*nombre: varchar(100)
*apellidos: varchar(100)
*vuelo_id: clave extranjera
*precio: valor entre 5 y 500
     * @return void
     */
    public function up()
    {
        Schema::create('pasajes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('apellidos', 100)->nullable();
            $table->foreignId('vuelo_id')->constrained('vuelos');
            $table->integer('precio')->unsigned()->between(5, 500);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasajes');
    }
};
