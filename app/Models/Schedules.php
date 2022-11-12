<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{
    use HasFactory;
    protected $table = 'schedules';
    protected $primaryKey = 'schedule_id';
    protected $fillable = [
        'template_id',
        'assigned_by',
        'assigned_to',
        'status',
        'next_due',
    ];


    public function template()
    {
        return $this->belongsTo(Template::class, 'template_id', 'template_id');
    }
    public function assigned_by()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
    public function assigned_to()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
    public  static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('name', 'like', '%' . $search . '%');
    }
}
