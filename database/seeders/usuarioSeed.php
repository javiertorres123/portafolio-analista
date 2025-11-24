<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class usuarioSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuario')->insert([
            'nombre' => 'Javier Oscar',
            'apellido' => 'Torres',
            'email' => 'javiertorresoscar1@gmail.com',
            'telefono' => '2317585477',
            'descripcion' => 'Desarrollador web full stack con experiencia en Laravel y Vue.js.',
            'foto' => 'https://example.com/foto.jpg',
            'github' => 'https://github.com/javiertorres123',
            'linkedin' => 'https://www.linkedin.com/in/javiertorres123/',
            ]);
    }
}
