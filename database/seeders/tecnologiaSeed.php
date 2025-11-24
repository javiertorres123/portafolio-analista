<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tecnologiaSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tecnologias')->insert([
            ['nombre' => 'Laravel', 'icono' => 'laravel.svg'],
            ['nombre' => 'PHP', 'icono' => 'php.svg'],
            ['nombre' => 'MySQL', 'icono' => 'mysql.svg'],
            ['nombre' => 'JavaScript', 'icono' => 'js.svg'],
            ['nombre' => 'React', 'icono' => 'react.svg'],
            ['nombre' => 'Docker', 'icono' => 'docker.svg'],
        ]);
    }
}
