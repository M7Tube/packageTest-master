<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FireExt extends Model
{
    use HasFactory;
    protected $table = 'fire_exts';
    protected $primaryKey = 'fire_ext_id';
    protected $fillable = [
        'project_code', 'number', 'project_name','fire_extinguisher_type', 'weight', 'last_inspection', 'exp_date',
    ];
}
