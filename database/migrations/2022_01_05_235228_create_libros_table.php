<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',100);
            $table->string('fecha_nacimiento',100);
            $table->timestamps();
        });
        Schema::create('genero', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',100);
            $table->timestamps();
        });

        Schema::create('libros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('autor_id');
            $table->unsignedBigInteger('genero_id');
            $table->string('titulo',100);
            $table->string('descripcion',100);
            $table->string('year_publicacion',100);
            $table->timestamps();

            $table->foreign('autor_id')->references('id')->on('autor');
            $table->foreign('genero_id')->references('id')->on('genero');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autor');
        Schema::dropIfExists('genero');
        Schema::dropIfExists('libros');
    }
}
