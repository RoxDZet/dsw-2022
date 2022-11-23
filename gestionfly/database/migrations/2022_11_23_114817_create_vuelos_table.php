<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *Vuelo
    *id: autonumérico
    *codigo: varchar(10)
    *origen: varchar(50)
    *destino: varchar(50)
    *fecha: date
    *hora: time
    *piloto_id: clave extranjera
    *campos created_at,  updated_at y deleted_at
     * @return void
     */
    public function up()
    {
        Schema::create('vuelos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 10);
            $table->string('origen', 50);
            $table->string('destino', 50);
            $table->date('fecha');
            $table->time('hora');
            $table->foreignId('piloto_id')->constrained('pilotos');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vuelos');
    }
};
