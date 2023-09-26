<?php

namespace App\Models\MONITORAMENTO\CONTATO;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Regiao extends Model
{
    protected $table = 'regioes';

    use HasFactory;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'description',
    ];

    public function estados(): HasMany
    {
        return $this->hasMany(Estado::class);
    }
}
