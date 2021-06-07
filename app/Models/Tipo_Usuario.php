<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Usuario extends Model
{
    use HasFactory;
    protected $table = "tipos";

    protected $primaryKey = 'tipo';

    public $timestamps = false;

    protected $fillable = [
        'descripcion'
    ];
}
