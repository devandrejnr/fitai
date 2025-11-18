<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tipos_treino', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->string('descricao', 255)->nullable();
            $table->enum('nivel_sugerido', ['iniciante','intermediario','avancado']);
            $table->smallInteger('dias_semana')->default(3);
            $table->boolean('ativo')->default(true);
            $table->timestamp('criado_em')->useCurrent();
            $table->timestamp('atualizado_em')->useCurrent()->useCurrentOnUpdate();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tipos_treino');
    }
};