<?php

namespace App\Models\MONITORAMENTO\CONTATO;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tel extends Model
{
    protected $table = 'tels';
    use HasFactory;

    protected $fillable = [
      'numero',
      'contato_monitoramento_id'
    ];

    public function contato_monitoramento(): BelongsTo
    {
        return $this->belongsTo(ContatoMonitoramento::class);
    }
}
