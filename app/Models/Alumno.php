<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    protected $keyType = 'string';

    protected $primaryKey = 'numero_control';

    public $timestamps = false;

    protected $fillable = [
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

    public function adeudo(){
        return $this->hasMany('App\Models\Adeudo');
    }

    public function pago(){
        return $this->hasMany('App\Models\Pago');
    }
}
