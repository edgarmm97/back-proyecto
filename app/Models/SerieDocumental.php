<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SerieDocumental extends Model
{
    use HasFactory;

    protected $table = 'cat_serie_documental';

    protected $fillable = [
        'id',
        'area_id',
        'codigo',
        'serie_documental',
        'valoracion_a',
        'valoracion_l',
        'valoracion_f',
        'vigencia_ac',
        'vigencia_at',
        'observaciones',
        'path',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
