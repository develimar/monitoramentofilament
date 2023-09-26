<?php

namespace App\Models\MONITORAMENTO;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassificacaoDoEvento extends Model
{
    protected $table = 'classificacoes_dos_eventos';
    use HasFactory;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'title',
        'description',
    ];
}
