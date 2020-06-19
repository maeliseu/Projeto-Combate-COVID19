<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Casos;
use App\Bairros;

class MapsController extends Controller
{
    private $objCasos;
    private $objBairros;
    
    public function __construct()
    {
        $this->objCasos=new Casos();
        $this->objBairros=new Bairros();
    }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        
        // SQL que dá certo
        // select bairros.regiao, COUNT(casos.id) from casos join bairros on casos.id_bairro=bairros.id GROUP BY bairros.regiao
        
        
        // $maps=$this->objCasos->select ('casos.id','casos.nome','bairros.regiao')
        // ->join ('bairros' ,'casos.id_bairro','=','bairros.id')
        // ->get();
        // dd($maps->where('regiao','=','1')->count());
        
        
        // GROUP by bairros.regiao     
        $casos=$this->objCasos->all();
        return view('maps', compact('casos'));
    }
}