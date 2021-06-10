<?php

namespace Database\Factories;

use App\Models\Profesor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProfesorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profesor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'rfc' => Str::random(13),
            'nombres' => $this->faker->name, 
            'ap_paterno' => Str::random(18), 
            'ap_materno' => Str::random(18), 
            'estado' => Str::random(20),
            'ciudad' => Str::random(20), 
            'calle' => Str::random(20), 
            'numero' => $this->faker->randomElement(['123','2003','2323', '432', '345']), 
            'colonia' => Str::random(20),
            'codigo_postal' => $this->faker->randomElement(['58060', '57080', '54090']), 
            'correo' => $this->faker->unique()->safeEmail, 
            'telefono' => $this->faker->randomElement(['781-63-50-18', '691-02-44-05', '755-37-90-74', '692-13-14-58'])
        ];
    }
}
