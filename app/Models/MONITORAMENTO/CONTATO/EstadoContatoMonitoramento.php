<?php

namespace App\Models\MONITORAMENTO\CONTATO;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EstadoContatoMonitoramento extends Model
{
    protected $table = 'estados_contatos_monitoramentos';
    use HasFactory;

    protected $fillable = [
        'estado_id',
        'contato_monitoramento_id'
    ];

    public function estado(): HasMany
    {
        return $this->hasMany(Estado::class);
    }

    public function contato_monitoramento(): HasMany
    {
        return $this->hasMany(ContatoMonitoramento::class);
    }
}
