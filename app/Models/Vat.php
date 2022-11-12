<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vat extends Model
{
    use HasFactory;
    protected $table = 'vats';
    protected $primaryKey = 'vat_id';
    protected $fillable = [
        'value_percent'
    ];
}
