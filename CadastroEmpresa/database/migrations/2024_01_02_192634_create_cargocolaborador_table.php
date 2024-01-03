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
        Schema::create('cargocolaborador', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('cargo_id');
            $table->foreignId('colaborador_id');
            $table->integer('nota_desempenho');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cargocolaborador');
    }
};
