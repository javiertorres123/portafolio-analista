<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    use HasFactory;

    protected $table = "usuario";

    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'telefono',
        'descripcion',
        'foto',
        'github',
        'linkedin',
    ];

    public $timestamps = false;

}