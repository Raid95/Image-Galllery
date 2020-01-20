<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'title', 'description', 'photo'
        ];

    public function Gallery() {
        return $this->belongsTo('App\Models\Gallery');
    }
}
