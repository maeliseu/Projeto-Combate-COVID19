<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Casos extends Model
{
    protected $fillable = [
        'nome',
        'sobrenome',
        'rua',
        'numero',
        'complemento',
        'bairro',
        'regiao'
    ];
}
