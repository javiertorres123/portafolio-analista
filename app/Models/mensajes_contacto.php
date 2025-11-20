<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mensajes_contacto extends Model
{
    use HasFactory;

    protected $table = "mensajes_contacto";

    protected $fillable = [
        'nombre',
        'email',
        'mensaje',
    ];

    public $timestamps = false;
}