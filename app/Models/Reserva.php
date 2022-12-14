<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $table = 'fecha_hora';
    protected $primaryKey = 'id';
    protected $fillable = ['fecha', 'hora', 'estado', 'eleccion'];
}
