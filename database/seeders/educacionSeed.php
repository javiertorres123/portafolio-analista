<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class educacionSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('educacion')->insert([
            [
                'institucion' => 'Universidad Tecnológica',
                'titulo' => 'Analista de Sistemas',
                'inicio' => '2019-03-01',
                'fin' => '2022-12-01',
                'descripcion' => 'Carrera de análisis, programación y bases de datos.',
            ],
        ]);
    }
}
