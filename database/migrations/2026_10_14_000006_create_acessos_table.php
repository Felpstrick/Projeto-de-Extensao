<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('acessos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('material_id')->constrained('materiais')->restrictOnDelete();
            $table->foreignId('pedido_id')->constrained('pedidos')->restrictOnDelete();
            $table->timestamp('liberado_em')->useCurrent();
            $table->unsignedInteger('downloads')->default(0);
            $table->timestamp('ultimo_download_em')->nullable();
            $table->timestamps();

            $table->unique(['user_id', 'material_id']); // um acesso por aluno e material
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('acessos');
    }
};
