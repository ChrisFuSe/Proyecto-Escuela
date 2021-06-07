<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    use HasFactory;
    protected $table = "niveles";

    protected $primaryKey = 'id_nivel';

    public $timestamps = false;

    protected $fillable = [
        'descripcion'
    ];
}
