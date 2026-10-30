<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

#[Fillable(['name', 'email', 'password', 'perfil'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    public const ALUNO = 'aluno';
    public const RESPONSAVEL = 'responsavel';
    public const ADMINISTRADOR = 'administrador';

    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function pedidos(): HasMany
    {
        return $this->hasMany(Pedido::class);
    }

    public function acessos(): HasMany
    {
        return $this->hasMany(Acesso::class);
    }

    public function isAdministrador(): bool
    {
        return $this->perfil === self::ADMINISTRADOR;
    }

}
