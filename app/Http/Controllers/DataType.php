<?php

namespace App\Http\Controllers;

class DataType extends \TCG\Voyager\Models\DataType
{
    protected $fillable = [
        'name',
        'slug',
        'display_name_singular',
        'display_name_plural',
        'icon',
        'model_name',
        'policy_name',
        'controller',
        'description',
        'generate_permissions',
        'server_side',
        'order_column',
        'order_display_column',
        'order_direction',
        'default_search_key',
        'scope',
        'details',
        'hc_order',
    ];

    public function getHcOrderAttribute()
    {
        return $this->details->hc_order ?? null;
    }

    public function setHcOrderAttribute($value)
    {
        $this->attributes['details'] = collect($this->details)->merge(['hc_order' => intval($value)]);
    }
}
