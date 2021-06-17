<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adeudo extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_adeudo';

    public $timestamps = false;

    protected $fillable = [
        'concepto',
        'fecha_adeudo',
        'numero_control',
    ];

    public function pagos(){
        return $this->belongsTo('App\Models\Pago');
    }

    public function alumno(){
        return $this->belongsTo('App\Models\Alumno');
    }
}
