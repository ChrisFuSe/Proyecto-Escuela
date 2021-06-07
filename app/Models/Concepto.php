<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concepto extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_concepto';

    public $timestamps = false;

    protected $fillable = [
        'monto',
        'descripcion'
    ];
}
