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
            $font->file(public_path('SourceSansPro-Bold.ttf'));
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

        $casosTotais = (object) [
            'regiao1' => $casos->where('regiao','=','1')->count(),
            'regiao2' => $casos->where('regiao','=','2')->count(),
            'regiao3' => $casos->where('regiao','=','3')->count(),
            'regiao4' => $casos->where('regiao','=','4')->count(),
            'regiao5' => $casos->where('regiao','=','5')->count(),
            'regiao6' => $casos->where('regiao','=','6')->count(),
            'regiao7' => $casos->where('regiao','=','7')->count(),
            'regiao8' => $casos->where('regiao','=','8')->count(),
            'regiao9' => $casos->where('regiao','=','9')->count(),
            'regiaototal' => $casos->count() 
        ];


        $img = Image::make('mapaoplimpo.png');
        $this->makeMap('265','383',$img,$casosTotais->regiao1);
        $this->makeMap('308','264',$img,$casosTotais->regiao2);
        $this->makeMap('88','365',$img,$casosTotais->regiao3);
        $this->makeMap('270','630',$img,$casosTotais->regiao4);
        $this->makeMap('425','440',$img,$casosTotais->regiao5);
        $this->makeMap('511','570',$img,$casosTotais->regiao6);
        $this->makeMap('297','531',$img,$casosTotais->regiao7);
        $this->makeMap('642','434',$img,$casosTotais->regiao8);
        $this->makeMap('768','355',$img,$casosTotais->regiao9);

        $img->resize(682.5, 590.25);

        
        $img->encode('png');
        $type = 'png';
        $new_image = 'data:image/' . $type . ';base64,' . base64_encode($img);
        
        
        return view('maps', compact('casosTotais', 'new_image'));
    }
}