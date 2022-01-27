<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    protected $fillable = [
        'nome',
        'cognome',
        'fc',
    ];
}
