<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tecnologias extends Model
{
    use HasFactory;

    protected $table = "tecnologias";

    protected $fillable = [
        'nombre',
        'icono',
    ];

    public $timestamps = false;
}