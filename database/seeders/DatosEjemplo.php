<?php

namespace Database\Seeders;

use App\Models\Alumno;
use App\Models\Profesor;
use Illuminate\Database\Seeder;

class DatosEjemplo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profesor::factory(20)->create();
        Alumno::factory(20)->create();
    }
}
