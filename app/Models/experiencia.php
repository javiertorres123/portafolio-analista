<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class experiencia extends Model
{
    use HasFactory;

    protected $table = "experiencia";

    protected $fillable = [
        'puesto',
        'empresa',
        'descripcion',
        'inicio',
        'fin',
        'actual',
    ];

    public $timestamps = false;
}