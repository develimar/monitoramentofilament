<?php

namespace App\Models\CADASTRO;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    use HasFactory;

    protected $table = 'tipos';

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
    ];
}
