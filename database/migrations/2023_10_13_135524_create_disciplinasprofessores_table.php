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
        Schema::create('disciplinasprofessores', function (Blueprint $table) {
            $table->id('IDdisciplinasprofessores');
            $table->integer('MatriculaProfessor/Disciplina');
            $table->string('NomeDisciplina', 255);
            $table->string('Série/Turma', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disciplinasprofessores');
    }
};
