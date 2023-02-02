<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'cat_rol';

    protected $fillable = [
        'id',
        'rol_id',
        'nombre_rol',
        'is_activo',
        'created_at',
        'updated_at',

    ];

    protected $hidden = [
        'is_activo',
        'created_at',
        'updated_at',
    ];
}
