<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fondo3Comments extends Model
{
    protected $fillable = [
        'id', 'user_id', 'fondo3_id', 'comment',
    ];
}
