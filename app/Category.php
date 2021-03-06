<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'id', 'logo_id', 'name', 'slug', 'body'
    ];

    public function subcategories()
    {
        return $this->hasMany(Subcategories::class);
    }
}
