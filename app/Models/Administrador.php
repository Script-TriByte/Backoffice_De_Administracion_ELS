<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Usuario;

class Administrador extends Usuario
{
    use HasFactory, SoftDeletes;

    protected $table = 'administradores';

    protected $primaryKey = 'docdeidentidad';

    protected $fillable = [
        'docdeidentidad'
    ];
}
