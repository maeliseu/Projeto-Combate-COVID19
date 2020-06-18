<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bairros extends Model
{
    protected $fillable = [
        'bairro',
        'regiao'
    ];

    public function relCasos()
    {
        return $this->hasMany ('App\Casos' , 'id_bairro');
    }
    
}
