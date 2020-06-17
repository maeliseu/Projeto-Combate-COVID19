<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bairros extends Model
{
    protected $fillable = [
        'bairro',
        'regiao'
    ];
}
