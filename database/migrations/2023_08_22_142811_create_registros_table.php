<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->year('meta_fecha');
            $table->text('que')->nullable();
            $table->text('porque')->nullable();
            $table->text('como')->nullable();
            $table->text('cuando')->nullable();
            $table->text('donde')->nullable();
            $table->text('conquien')->nullable();
            $table->text('costo')->nullable();
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('subcategoria_id');
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('subcategoria_id')->references('id')->on('subcategorias');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registros');
    }
};
