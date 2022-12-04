<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use eloquentFilter\QueryFilter\ModelFilters\Filterable;
use App\ModelFilters\TemplateFilter;
class NewTemplate extends Model
{
    use HasFactory;
    use TemplateFilter, Filterable;

    protected $table = 'new_templates';
    protected $primaryKey = 'new_template_id';
    protected $fillable = [
        'icon',
        'title',
        'desc',
        'title_page',
        'title_page_title',
        'pages',
        'common_multiple_choise_options',
        'user_id'
    ];

    protected $casts = [
        'title_page' => 'json',
        'pages' => 'json',
        'common_multiple_choise_options' => 'json',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
