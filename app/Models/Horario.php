<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_horario';

    public $timestamps = false;

    protected $fillable = [
        'horarios',
        'dia'
    ];
}
