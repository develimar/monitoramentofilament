<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use Spatie\Permission\Models\Permission as ModelsPermission;
use Spatie\Permission\Traits\HasPermissions;

class Permission extends ModelsPermission
{
    use HasFactory;
}
