<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *Piloto
    *id: autonumérico
    *nombre: varchar(100)
    *apellidos: varchar(100)
    *f_nacimiento: date
    *email: varchar(50)
    *dni: varchar(10)
    *telefono: varchar(20)
     * @return void
     */
    public function up()
    {
        Schema::create('pilotos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('apellidos', 100)->nullable();
            $table->date('f_nacimiento')->nullable();
            $table->string('email', 50)->nullable();            
            $table->string('dni', 10)->unique();
            $table->string('telefono', 10)->nullable();
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pilotos');
    }
};
