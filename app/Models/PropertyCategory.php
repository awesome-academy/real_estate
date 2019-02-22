<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyCategory extends Model
{
    protected $guarded = ['id'];

    protected $fillable = [
        'name',
    ];

    public function propertyCategory()
    {
        return $this->hasMany('App\Model\PropertyType', 'property_category_id');
    }

    public function properties()
    {
        return $this->hasManyThrough('App\Model\Property', 'App\Model\PropertyType', 'property_category_id', 'property_type_id');
    }
}
