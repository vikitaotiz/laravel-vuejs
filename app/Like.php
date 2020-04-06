<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $guarded = [];
    
    public function reply()
    {
        return $this->belongsTo(Reply::class);
    }
}
