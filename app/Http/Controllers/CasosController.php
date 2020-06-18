<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Casos;
use App\Bairros;

class CasosController extends Controller
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
        // dd($this->objCasos->find(1)->relBairros->bairro);
        $casos=$this->objCasos->all();
        return view('casos.index', compact('casos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bairros=$this->objBairros->all();
        return view('casos.create', compact('bairros'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome'=>'required',
            'sobrenome'=>'required',
            'id_bairro'=>'required'
        ]);
        // $bairro = Bairros::find($request->get('id_bairro'));
        $caso = new Casos([
            'nome' => $request->get('nome'),
            'sobrenome' => $request->get('sobrenome'),
            'rua' => $request->get('rua'),
            'numero'=> $request->get('numero'),
            'complemento'=> $request->get('complemento'),
            'id_bairro'=> $request->get('id_bairro'),
            
        ]);
        $caso->save();
        return redirect('/casos')->with('success', 'Caso salvo!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caso = $this->objCasos->find($id);
        $bairros=$this->objBairros->all();
        return view('casos.edit', compact('caso' , 'bairros'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome'=>'required',
            'sobrenome'=>'required',
            'id_bairro'=>'required'
        ]);

        $caso = Casos::find($id);
        $caso->nome = $request->get('nome');
        $caso->sobrenome = $request->get('sobrenome');
        $caso->rua = $request->get('rua');
        $caso->numero = $request->get('numero');
        $caso->complemento = $request->get('complemento');
        $caso->id_bairro = $request->get('id_bairro');
        $caso->save();

        return redirect('/casos')->with('success', 'Caso alterado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $caso = Casos::find($id);
        $caso->delete();

        return redirect('/casos')->with('success', 'Caso deleted!');
    }
}
