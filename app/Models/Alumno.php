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
        'deuda_total',
        'curp',
        'nombres',
        'ap_paterno',
        'ap_materno',
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

    //Relacion uno a uno
    protected function grupo(){
        return $this->hasOne(Grupo::class, 'id_grupo', 'numero_control');
    }
}
