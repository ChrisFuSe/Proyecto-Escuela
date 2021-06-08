<?php

namespace Database\Seeders;

use App\Models\Nivel;
use Illuminate\Database\Seeder;

class Niveles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kidsbox1=Nivel::create([
            'descripcion' => "Kid's box 1",
        ]);
        $kidsbox2=Nivel::create([
            'descripcion' => "Kid's box 2",
        ]);
        $kidsbox3=Nivel::create([
            'descripcion' => "Kid's box 3",
        ]);
        $kidsbox4=Nivel::create([
            'descripcion' => "Kid's box 4",
        ]);
        $kidsbox5=Nivel::create([
            'descripcion' => "Kid's box 5",
        ]);
        $kidsbox6=Nivel::create([
            'descripcion' => "Kid's box 6",
        ]);


        $A1=Nivel::create([
            'descripcion' => "F2F A1",
        ]);
        $A2=Nivel::create([
            'descripcion' => "F2F A2",
        ]);
        $B1=Nivel::create([
            'descripcion' => "F2F B1",
        ]);
        $B2=Nivel::create([
            'descripcion' => "F2F B2",
        ]);
        $C1=Nivel::create([
            'descripcion' => "F2F C1",
        ]);

        $C2=Nivel::create([
            'descripcion' => "NG C2",
        ]);

        $TTC=Nivel::create([
            'descripcion' => "TTC",
        ]);

        $bachellors=Nivel::create([
            'descripcion' => "Bachellor’s",
        ]);
    }
}
