<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class proyectoSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           DB::table('proyectos')->insert([
            [
                'titulo' => 'Sistema de Gestión de Alumnos',
                'descripcion' => 'Aplicación web en Laravel para administrar alumnos, cursadas y documentación.',
                'imagen' => 'proyecto1.jpg',
                'url_demo' => 'https://demo.com/proyecto1',
                'url_repo' => 'https://github.com/javier/proyecto1',
                'fecha' => '2024-10-10',
                'destacado' => 1,
            ],
            [
                'titulo' => 'API REST en Laravel + JWT',
                'descripcion' => 'API completa con roles, autenticación JWT y validación.',
                'imagen' => 'proyecto2.jpg',
                'url_demo' => 'https://demo.com/proyecto1',
                'url_repo' => 'https://github.com/javier/proyecto2',
                'fecha' => '2023-07-15',
                'destacado' => 0,
            ],
        ]);
    }
}
