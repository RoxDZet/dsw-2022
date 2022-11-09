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
        Schema::create('recetas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 20);
            $table->string('descripcion', 500);
            $table->double('precio', 10, 2);
            $table->integer('calorias');
            $table->date('f_alta')->nullable();
            $table->timestamps();
        });
    }

    /**Receta: id, nombre, descripcion, precio, calorias, f_alta 
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recetas');
    }
};
