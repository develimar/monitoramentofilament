<?php

namespace App\Models\CADASTRO;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\hasMany;

class Modelo extends Model
{
    use HasFactory;

    protected $table =  'modelos';

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'marca_id'
    ];

    public function marca(): BelongsTo
    {
        return $this->belongsTo(Marca::class);
    }
}
