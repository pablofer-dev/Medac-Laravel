<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioNR extends Model
{
    use HasFactory;
    protected $table = 'usuarionr';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'telefono',
        'dni',
    ];
}
