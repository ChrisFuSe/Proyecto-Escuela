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
        'monto_adeudo',
        'id_concepto',
        'pagado',
        'fecha_adeudo',
        'numero_control',
    ];
}
