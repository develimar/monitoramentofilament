<?php

namespace App\Models\MONITORAMENTO\CONTATO;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Estado extends Model
{
    protected $table = 'estados';

    use HasFactory;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'regiao_id',
        'sigla',
    ];

    public function regiao(): BelongsTo
    {
        return $this->belongsTo(Regiao::class);
    }

    public function contatos_monitoramentos(): BelongsToMany
    {
        return $this->belongsToMany(ContatoMonitoramento::class, 'estados_contatos_monitoramentos')->withTimestamps();
    }
}
