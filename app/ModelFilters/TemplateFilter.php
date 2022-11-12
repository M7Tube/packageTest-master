<?php

namespace App\ModelFilters;

use Illuminate\Database\Eloquent\Builder;

trait TemplateFilter
{
    /**
     * This is a sample custom query
     * @param \Illuminate\Database\Eloquent\Builder $builder
     * @param                                       $value
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function search(Builder $builder, $value)
    {
        return $builder->where('title', 'like', '%' . $value . '%')->orWhere('desc', 'like', '%' . $value . '%');
    }
}
