<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccessCode extends Model
{
    use HasFactory;
    protected $table = 'access_codes';
    protected $primaryKey = 'access_code_id';
    protected $fillable = [
        'code'
    ];
}
