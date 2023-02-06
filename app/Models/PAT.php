<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal_access_tokens extends Model
{
    use HasFactory;
    protected $table = 'personal_access_tokens';
    protected $primaryKey = 'id';
    protected $fillable = ['tokenable_type','tokenable_id','name','token','abilities','last_used_at','expires_at'];
}
