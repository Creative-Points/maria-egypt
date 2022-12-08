<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    public function images()
    {
        return $this->hasMany('App\Models\Image', 'place_id');
    }
}
