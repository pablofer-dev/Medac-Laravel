<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditCard extends Model
{
    use HasFactory;
    protected $table = 'creadit_card';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre_titular', 'serial', 'user_id'];
}
