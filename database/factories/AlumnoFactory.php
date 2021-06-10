<?php

namespace Database\Factories;

use App\Models\Alumno;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AlumnoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Alumno::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'numero_control' =>$this->faker->unique()->phoneNumber,
            'deuda_total' => 0,
            'curp' => Str::random(18),
            'nombres' => $this->faker->name, 
            'ap_paterno' => Str::random(18),
            'ap_materno' => Str::random(18), 
            'estado' => Str::random(18),
            'ciudad' => Str::random(18),
            'calle' => Str::random(18),
            'numero' => $this->faker->randomElement(['123','2003','2323', '432', '345']), 
            'colonia' => Str::random(18),
            'codigo_postal' => $this->faker->randomElement(['58060', '57080', '54090']), 
            'correo' => $this->faker->unique()->safeEmail, 
            'telefono' => $this->faker->randomElement(['781-63-50-18', '691-02-44-05', '755-37-90-74', '692-13-14-58']),
            'estado_actual' => $this->faker->randomElement(['Alta', 'Baja']),
            'oyente_clase' => $this->faker->randomElement(['s', 'n']),
            'descuento' => $this->faker->randomElement([20, 30, 40, 60, 70]),
            'fecha_nac' => $this->faker->randomElement(['2000-01-22', '2001-02-11', '2000-12-27']),
            'factura' => $this->faker->randomElement(['s', 'n']),
        ];
    }
}
