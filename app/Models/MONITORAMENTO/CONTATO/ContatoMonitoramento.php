<?php

namespace App\Models\MONITORAMENTO\CONTATO;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ContatoMonitoramento extends Model
{
    protected $table = 'contatos_monitoramentos';

    use HasFactory;

    protected $fillable = [
        'name',
        'contatato',
        'description',
        'tipo_contato_id'
    ];

    public function tipo_contato(): BelongsTo
    {
        return $this->belongsTo(TipoContato::class);
    }

    public function tels(): HasMany
    {
        return $this->hasMany(Tel::class);
    }

    public function estados(): BelongsToMany
    {
        return $this->belongsToMany(Estado::class, 'estados_contatos_monitoramentos')->withTimestamps();
    }
}
