<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Alumno;

class Grupo extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_grupo';

    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'descripcion',
        'id_nivel',
        'id_horario',
        'id_profesor'
    ];

    protected function alumno(){
        return $this->belongsTo(Alumno::class, 'numero_control', 'id_grupo');
    }
}
