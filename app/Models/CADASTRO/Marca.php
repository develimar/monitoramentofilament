<?php

namespace App\Models\CADASTRO;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Marca extends Model
{
    use HasFactory;

    protected $table =  'marcas';

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name'
    ];

    public function modelos(): HasMany
    {
        return $this->hasMany(Modelo::class);
    }
}
