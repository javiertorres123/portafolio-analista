<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class experienciaSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          DB::table('experiencia')->insert([
            [
                'empresa' => 'Tech Solutions',
                'puesto' => 'Desarrollador Full Stack',
                'descripcion' => 'Desarrollo de aplicaciones web con Laravel y Vue.js.',
                'inicio' => '2022-01-01',
                'fin' => null,
                'actual' => 1,
            ],
            [
                'empresa' => 'Agencia Web XYZ',
                'puesto' => 'Backend Developer',
                'descripcion' => 'APIs REST y mantenimiento de sistemas internos.',
                'inicio' => '2020-01-01',
                'fin' => '2021-12-01',
                'actual' => 0,
            ],
        ]);
    }
}
