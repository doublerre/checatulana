<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Banners extends Model
{
    protected $fillable = [
        'id', 'file',
    ];
}
