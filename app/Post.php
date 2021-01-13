<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id', 'subcategory_id', 'name', 'slug', 'excerpt', 'body', 'status', 'file'
    ];

    public function subcategory()
    {
        return $this->belongsTo(Subcategories::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
