<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_movimiento';

    public $timestamps = false;

    protected $fillable = [
        'movimiento',
        'inf_antigua',
        'inf_nueva',
        'descripcion',
        'tabla',
        'fechayhora',
        'id'
    ];

}
