<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
    protected $table = "profesores";

    protected $primaryKey = 'id_profesor';

    public $timestamps = false;

    protected $fillable = [
        'rfc',
        'nombres',
        'ap_paterno',
        'ap_materno',
        'calle',
        'numero',
        'colonia',
        'codigo_postal',
        'correo',
        'telefono'
    ];
}
