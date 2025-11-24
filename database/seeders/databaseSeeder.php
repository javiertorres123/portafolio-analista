<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $this->call([
    usuarioSeed::class,
    ProyectoSeed::class,        // PRIMERO crear proyectos
    TecnologiaSeed::class,      // luego tecnologías
    Proyecto_TecnoSeed::class,  // recién ahora relaciones many-to-many
    ExperienciaSeed::class,
    EducacionSeed::class,
    Mensajes_ContactoSeed::class,
]);

    }
}
