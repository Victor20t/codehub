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
        Schema::create('caderneta', function (Blueprint $table) {
            $table->id();
            $table->integer('MatriculaAluno');
            $table->decimal('nota 1', 3, 1);
            $table->decimal('nota 2', 3, 1);
            $table->decimal('nota 3', 3, 1);
            $table->decimal('nota 4', 3, 1);
            $table->decimal('nota 5', 3, 1);
            $table->decimal('prova', 3, 1);
            $table->decimal('média', 3, 1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caderneta');
    }
};
