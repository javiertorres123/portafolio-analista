<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class mensajes_ContactoSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          DB::table('mensajes_contacto')->insert([
            [
                'nombre' => 'Juan Perez',
                'email' => 'juan@example.com',
                'mensaje' => 'Hola Javier, vi tu portafolio y quiero contratarte.',
                'created_at' => now(),
            ]
        ]);
    }
}
