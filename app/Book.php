<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = [];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
