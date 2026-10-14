<?php

//caminho da pasta para o laravel se localizar
namespace App\Models;

//imports
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model; //base para model
use Illuminate\Database\Eloquent\Relations\HasMany; //tipo de relacionamento
use Illuminate\Database\Eloquent\SoftDeletes; //não apaga registros, apenas os oculta

class Material extends Model
{
    use SoftDeletes;

    protected $table = 'materiais'; //nome da tabela no banco

    protected $fillable = [
        'titulo', 'descricao', 'preco', 'arquivo', 'arquivo_previa',
        'serie', 'disciplina', 'assunto', 'tipo', 'ativo',
    ]; //colunas que podem ser preenchidas

    protected function casts(): array //converte de texto
    {
        return [
            'preco' => 'decimal:2',
            'ativo' => 'boolean',
        ];
    }

    public function scopeAtivos(Builder $query): Builder //atalho para consulta de ativos
    {
        return $query->where('ativo', true);
    }

    public function itens(): HasMany //relacionamento: pode aparecer em muitos itens
    {
        return $this->hasMany(ItemPedido::class);
    }

    public function acessos(): HasMany //relacionamento: pode ter muitos acessos
    {
        return $this->hasMany(Acesso::class);
    }

    public function ativar(): void
    {
        $this->update(['ativo' => true]);
    }

    public function desativar(): void
    {
        $this->update(['ativo' => false]);
    }
}
