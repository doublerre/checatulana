<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fondo4 extends Model
{
    protected $fillable = [
        'id', 'user_id', 'm_user_id', 'file', 'file_user',
    ];
}
