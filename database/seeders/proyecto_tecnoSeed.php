<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Proyectos;
use App\Models\Tecnologias;

class Proyecto_TecnoSeed extends Seeder
{
    public function run(): void
    {
        // Traer los proyectos recién creados por su título
        $proyecto1 = Proyectos::where('titulo', 'Sistema de Gestión de Alumnos')->first();
        $proyecto2 = Proyectos::where('titulo', 'API REST en Laravel + JWT')->first();

        if (!$proyecto1 || !$proyecto2) {
            $this->command->error('Proyectos no encontrados. Corre primero proyectoSeed.');
            return;
        }

        // Traer tecnologías por ID
        $laravel = Tecnologias::find(1);
        $php     = Tecnologias::find(2);
        $mysql   = Tecnologias::find(3);
        $js      = Tecnologias::find(4);
        $docker  = Tecnologias::find(6);

        // Insertar relaciones en la tabla pivot
        DB::table('proyecto_tecnologia')->insert([
            ['proyecto_id' => $proyecto1->id, 'tecnologia_id' => $laravel->id],
            ['proyecto_id' => $proyecto1->id, 'tecnologia_id' => $mysql->id],
            ['proyecto_id' => $proyecto1->id, 'tecnologia_id' => $docker->id],

            ['proyecto_id' => $proyecto2->id, 'tecnologia_id' => $laravel->id],
            ['proyecto_id' => $proyecto2->id, 'tecnologia_id' => $php->id],
            ['proyecto_id' => $proyecto2->id, 'tecnologia_id' => $js->id],
        ]);
    }
}
