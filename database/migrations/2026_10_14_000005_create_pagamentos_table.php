<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pagamentos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pedido_id')->constrained('pedidos')->restrictOnDelete();
            $table->string('metodo', 20)->default('pix');
            $table->string('status', 20)->default('pendente')->index(); // pendente | confirmado | falhou | expirado
            $table->decimal('valor', 10, 2);
            $table->text('qr_code_pix')->nullable();
            $table->text('pix_copia_cola')->nullable();
            $table->string('id_gateway')->nullable()->unique();         // id da cobrança no gateway (usado no webhook)
            $table->timestamp('confirmado_em')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pagamentos');
    }
};
