<?php

namespace App\Models\MONITORAMENTO\CONTATO;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipoContato extends Model
{
    protected $table = 'tipos_contatos';

    use HasFactory;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'description'
    ];

    public function contatos_monitoramentos(): HasMany
    {
        return $this->hasMany(ContatoMonitoramento::class);
    }
}
