<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    use HasFactory;
    protected $table = "calificaciones";

    protected $primaryKey = 'id_calificacion';

    public $timestamps = false;

    protected $fillable = [
        'calificacion_escrita',
        'calificacion_oral',
        'unidad',
        'id_nivel',
        'numero_control',
        'asistencia_total'
    ];
}
