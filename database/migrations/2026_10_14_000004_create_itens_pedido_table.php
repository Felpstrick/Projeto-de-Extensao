<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('itens_pedido', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pedido_id')->constrained('pedidos')->cascadeOnDelete();
            $table->foreignId('material_id')->constrained('materiais')->restrictOnDelete();
            $table->decimal('preco_unitario', 10, 2); // preço no momento da compra
            $table->timestamps();

            $table->unique(['pedido_id', 'material_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('itens_pedido');
    }
};
