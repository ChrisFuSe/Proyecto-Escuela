<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_asistencia';

    public $timestamps = false;

    protected $fillable = [
        'presencia',
        'fecha',
        'numero_control',
    ];
}
