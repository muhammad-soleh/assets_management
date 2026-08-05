<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public function asset()
    {
        return $this->hasMany(Asset::class);
    }
}
