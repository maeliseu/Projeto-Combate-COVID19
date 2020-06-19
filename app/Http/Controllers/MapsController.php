<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Casos;
use App\Bairros;



// import the Intervention Image Manager Class
use Image;


class MapsController extends Controller
{
    private $objCasos;
    private $objBairros;
    
    public function __construct()
    {
        $this->objCasos=new Casos();
        $this->objBairros=new Bairros();
    }
    

    public function makeMap($x, $y, $imagem ,$soma)
    {        
        $imagem->text($soma.' Casos', $x, $y, function($font) {  
            $font->file(public_path('Piedra.ttf'));
            $font->size(25);  
            $font->color('#00000');   
            $font->angle(0);  
        });  
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        
        // GROUP by bairros.regiao     
        $casos=$this->objCasos->join('bairros' ,'casos.id_bairro','=','bairros.id')->get();

        $img = Image::make('mapaoplimpo.png');
        $this->makeMap('265','383',$img,$casos->where('regiao','=','1')->count());
        $this->makeMap('308','264',$img,$casos->where('regiao','=','2')->count());
        $this->makeMap('88','365',$img,$casos->where('regiao','=','3')->count());
        $this->makeMap('270','630',$img,$casos->where('regiao','=','4')->count());
        $this->makeMap('425','440',$img,$casos->where('regiao','=','5')->count());
        $this->makeMap('511','570',$img,$casos->where('regiao','=','6')->count());
        $this->makeMap('297','531',$img,$casos->where('regiao','=','7')->count());
        $this->makeMap('642','434',$img,$casos->where('regiao','=','8')->count());
        $this->makeMap('768','355',$img,$casos->where('regiao','=','9')->count());


        //$img->save('mapaop2.png');
        $img->encode('png');
        $type = 'png';
        $new_image = 'data:image/' . $type . ';base64,' . base64_encode($img);
        
        
        return view('maps', compact('casos', 'new_image'));
    }
}