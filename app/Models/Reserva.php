<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $table = 'reserva';
    protected $primaryKey = 'id';
    protected $fillable = ['numero_persona', 'users_id', 'menu_id', 'tarjeta_creadito_id', 'usuarionr_id', 'mesa_id', 'fecha_fk', 'hora_id'];
}
