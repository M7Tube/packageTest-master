<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $table='items';
    protected $primaryKey='item_id';
    protected $fillable=[
        'name','price'
    ];

    public  static function search($search)
    {
        return empty($search)?static::query()
        :static::query()->where('name','like','%'.$search.'%');
    }
}
