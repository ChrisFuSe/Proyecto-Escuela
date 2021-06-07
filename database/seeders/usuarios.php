<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class usuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarioDirectora=User::create([
            'username' => 'Vanessa',
            'password' => Hash::make('PES789'),
            'email' => 'vanessa@gmail.com',
            'nombres' => 'Vanessa',
            'ap_paterno' => 'Suarez',
            'ap_materno' => 'Camacho',
            'tipo' => '1',
        ]);
        $Secretaria=User::create([
            'username' => 'Secretaria',
            'password' => Hash::make('PES456'),
            'email' => 'secretaria@gmail.com',
            'nombres' => 'Sofia',
            'ap_paterno' => 'Garcia',
            'ap_materno' => 'Padilla',
            'tipo' => '2',
        ]);
        $Maestro=User::create([
            'username' => 'Maestro',
            'password' => Hash::make('PES123'),
            'email' => 'maestro@gmail.com',
            'nombres' => 'Juan',
            'ap_paterno' => 'Lopez',
            'ap_materno' => 'Castillo',
            'tipo' => '3',
        ]);
    }
}
