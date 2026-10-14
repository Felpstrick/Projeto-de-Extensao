<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Acesso extends Model
{
    protected $fillable = [
        'user_id', 'material_id', 'pedido_id',
        'liberado_em', 'downloads', 'ultimo_download_em',
    ];

    protected function casts(): array
    {
        return [
            'liberado_em' => 'datetime',
            'ultimo_download_em' => 'datetime',
        ];
    }

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function material(): BelongsTo
    {
        return $this->belongsTo(Material::class)->withTrashed();
    }

    public function pedido(): BelongsTo
    {
        return $this->belongsTo(Pedido::class);
    }

    public function registrarDownload(): void
    {
        $this->increment('downloads');
        $this->update(['ultimo_download_em' => now()]);
    }
}
