<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    public function place()
    {
        return $this->belongsTo('App\Models\Place', 'place_id');
    }
}
