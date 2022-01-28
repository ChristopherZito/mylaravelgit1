<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'nome',
        'cognome',
        'fc',
    ];

    public function email()
    {
        return $this-> nome. '.' . $this->cognome . '@gmail.com' ;;
    }
}
