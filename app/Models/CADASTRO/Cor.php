<?php

namespace App\Models\CADASTRO;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cor extends Model
{
    protected $table =  'cores';
    use HasFactory;

    protected $dates = ['deleted_at'];

    protected $fillable = [
      'name'
    ];
}
