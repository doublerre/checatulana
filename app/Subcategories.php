<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategories extends Model
{
    protected $fillable = [
        'id', 'name','body'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}