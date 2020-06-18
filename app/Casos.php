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
        'id_bairro'
    ];

    public function relBairros()
    {
        return $this->hasOne ('App\Bairros' , 'id', 'id_bairro');
    }
}
