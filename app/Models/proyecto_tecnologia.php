<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proyecto_tecnologia extends Model
{
    use HasFactory;

    protected $table = "proyecto_tecnologia";

    protected $fillable = [
        'proyecto_id',
        'tecnologia_id',
    ];

    public $timestamps = false;
}