<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hora extends Model
{
    use HasFactory;
    protected $table = 'hora';
    protected $primaryKey = 'id';
    protected $fillable = [
        'hora',
        'created_at',
        'updated_at',
    ];
}
