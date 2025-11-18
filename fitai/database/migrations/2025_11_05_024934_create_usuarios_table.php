<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 120);
            $table->string('email', 150)->unique();
            $table->string('senha', 255);
            $table->enum('sexo', ['M','F','O'])->nullable();
            $table->date('data_nascimento')->nullable();
            $table->decimal('altura', 5, 2)->nullable();
            $table->decimal('peso_atual', 6, 2)->nullable();
            $table->enum('objetivo', ['emagrecimento','hipertrofia','resistencia','saude_geral','definicao'])->nullable();
            $table->enum('nivel', ['iniciante','intermediario','avancado'])->default('iniciante');
            $table->timestamp('data_cadastro')->useCurrent();
            $table->enum('preferencia_treino', ['manha','tarde','noite'])->nullable();
           
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
