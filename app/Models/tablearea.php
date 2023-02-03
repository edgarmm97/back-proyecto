<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tablearea extends Model
{
    use HasFactory;
    protected $fillable =[
    'area_id',
    'codigo',
    'serie',
    'val_a',
    'val_l',
    'val_f',
    'vig_ac',
    'vig_at',
    'total',
    'eliminacion',
    'conservacion',
    'muestreo',
    'observaciones'
];
}
