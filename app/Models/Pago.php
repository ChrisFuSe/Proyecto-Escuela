<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    protected $primaryKey = 'num_referencia';

    public $timestamps = false;

    protected $fillable = [
        'monto',
        'fecha_pago',
        'descripcion',
        'id_adeudo',
        'numero_control'
    ];

    public function adeudo(){
        return $this->hasMany('App\Models\Adeudo');
    }

    public function alumno(){
        return $this->belongsTo('App\Models\Alumno');
    }
}
