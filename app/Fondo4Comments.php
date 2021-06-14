<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fondo4Comments extends Model
{
    protected $fillable = [
        'id', 'user_id', 'fondo4_id', 'comment',
    ];
}
