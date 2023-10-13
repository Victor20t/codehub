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
        Schema::create('desempenhoescolar', function (Blueprint $table) {
            $table->id();
            $table->string('ComponentesCurriculares', 255);
            $table->decimal('1° UnidadeMédia', 3, 1);
            $table->integer('1° UnidadeFJ');
            $table->integer('1° UnidadeFNJ');
            $table->decimal('1° UnidadePFA', 5, 2);
            $table->decimal('2° UnidadeMédia', 3, 1);
            $table->integer('2° UnidadeFJ');
            $table->integer('2° UnidadeFNJ');
            $table->decimal('2° UnidadePFA', 5, 2);
            $table->decimal('3° UnidadeMédia', 3, 1);
            $table->integer('3° UnidadeFJ');
            $table->integer('3° UnidadeFNJ');
            $table->decimal('3° UnidadePFA', 5, 2);
            $table->decimal('4° UnidadeMédia', 3, 1);
            $table->integer('4° UnidadeFJ');
            $table->integer('4° UnidadeFNJ');
            $table->decimal('4° UnidadePFA', 5, 2);
            $table->decimal('Média Anual', 3, 1);
            $table->decimal('NotaRecFinal', 3, 1);
            $table->decimal('NotaFinal', 3, 1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('desempenhoescolar');
    }
};
