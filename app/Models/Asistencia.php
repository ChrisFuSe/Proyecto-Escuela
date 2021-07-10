<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;

    protected $primaryKey = 'Id';

    protected $fillable = [
        'Nombre',
        'Password',
        'Correo',
        'Telefono',
    ];
}
