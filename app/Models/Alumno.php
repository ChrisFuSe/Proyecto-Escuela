<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Grupo;

class Alumno extends Model
{
    use HasFactory;
    protected $keyType = 'string';

    protected $primaryKey = 'numero_control';

    public $timestamps = false;

    protected $fillable = [
        'numero_control',
        'deuda_total',
        'curp',
        'nombres',
        'ap_paterno',
        'ap_materno',
        'estado',
        'ciudad',
        'calle',
        'numero',
        'colonia',
        'codigo_postal',
        'telefono',
        'correo',
        'estado_actual',
        'oyente_clase',
        'descuento',
        'fecha_nac',
        'id_grupo',
        'fnombres',
        'fdomicilio',
        'frfc',
        'fcorreo',
        'ftelefono',
        'factura',
    ];
}
