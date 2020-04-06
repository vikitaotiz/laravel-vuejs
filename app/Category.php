<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getPathAttribute()
    {
        return asset("api/categories/$this->slug");
    }

    protected $guarded = [];
    
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
