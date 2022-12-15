<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FechaHora extends Model
{
    use HasFactory;
    protected $table = 'fecha_hora';
    protected $primaryKey = 'fk_fecha';
    protected $fillable = ['fk_fecha', 'id_hora', 'estado', 'eleccion'];
}
