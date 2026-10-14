<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('materiais', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 150);
            $table->text('descricao')->nullable();
            $table->decimal('preco', 10, 2);
            $table->string('arquivo');                       // caminho em storage/app/materiais (privado)
            $table->string('arquivo_previa')->nullable();    // prévia exibida no catálogo (RF02)
            $table->string('serie', 30)->index();            // 6º ano ... 3º ano EM, pré-vestibular
            $table->string('disciplina', 50)->index();
            $table->string('assunto', 100)->nullable();
            $table->string('tipo', 30)->index();             // lista_exercicios | revisao | simulado
            $table->boolean('ativo')->default(true)->index();
            $table->timestamps();
            $table->softDeletes();                           // preserva o histórico de vendas
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('materiais');
    }
};
