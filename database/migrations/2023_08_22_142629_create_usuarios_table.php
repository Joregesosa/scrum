<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->string('apellido')->nullable();
            $table->string('correo');
            $table->string('pass');
            $table->string('vision')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->unsignedBigInteger('curso_id')->nullable();
            $table->unsignedBigInteger('rol_id')->nullable();
            $table->unsignedBigInteger('pais_id')->nullable();
            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->foreign('rol_id')->references('id')->on('roles');
            $table->foreign('pais_id')->references('id')->on('paises');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
