<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\DB;

class Pagamento extends Model
{
    public const PENDENTE = 'pendente';
    public const CONFIRMADO = 'confirmado';
    public const FALHOU = 'falhou';
    public const EXPIRADO = 'expirado';

    protected $fillable = [
        'pedido_id', 'metodo', 'status', 'valor',
        'qr_code_pix', 'pix_copia_cola', 'id_gateway', 'confirmado_em',
    ];

    protected function casts(): array
    {
        return [
            'valor' => 'decimal:2',
            'confirmado_em' => 'datetime',
        ];
    }

    public function pedido(): BelongsTo
    {
        return $this->belongsTo(Pedido::class);
    }

    // Chamado pelo webhook do gateway (RF06): confirma o pagamento e libera os materiais (RF07).
    public function confirmar(): void
    {
        if ($this->status === self::CONFIRMADO) {
            return; // webhooks podem chegar repetidos
        }

        DB::transaction(function () {
            $this->update([
                'status' => self::CONFIRMADO,
                'confirmado_em' => now(),
            ]);

            $pedido = $this->pedido;
            $pedido->update(['status' => Pedido::PAGO]);
            $pedido->liberarAcessos();
        });
    }
}
