<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pedido extends Model
{
    public const PENDENTE = 'pendente';
    public const PAGO = 'pago';
    public const CANCELADO = 'cancelado';
    public const EXPIRADO = 'expirado';

    protected $fillable = ['user_id', 'status', 'total'];

    protected function casts(): array
    {
        return ['total' => 'decimal:2'];
    }

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function itens(): HasMany
    {
        return $this->hasMany(ItemPedido::class);
    }

    public function pagamentos(): HasMany
    {
        return $this->hasMany(Pagamento::class);
    }

    public function acessos(): HasMany
    {
        return $this->hasMany(Acesso::class);
    }

    public function adicionarItem(Material $material): void
    {
        $this->itens()->firstOrCreate(
            ['material_id' => $material->id],
            ['preco_unitario' => $material->preco]
        );

        $this->calcularTotal();
    }

    public function calcularTotal(): void
    {
        $this->update(['total' => $this->itens()->sum('preco_unitario')]);
    }

    public function cancelar(): void
    {
        $this->update(['status' => self::CANCELADO]);
    }

    public function liberarAcessos(): void
    {
        foreach ($this->itens as $item) {
            Acesso::firstOrCreate(
                ['user_id' => $this->user_id, 'material_id' => $item->material_id],
                ['pedido_id' => $this->id, 'liberado_em' => now()]
            );
        }
    }
}
