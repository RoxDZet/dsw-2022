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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 20);
            $table->string('apellidos', 50);
            $table->string('email', 60)->unique();
            $table->date('f_nacimiento')->nullable();
            $table->string('c_postal', 10);
            $table->timestamps();
        });
    }

    /**Alumno: id, nombre, apellidos, email, f_nacimiento, c_postal 
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
};
