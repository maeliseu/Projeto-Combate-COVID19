<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Casos;

class CasosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $casos = Casos::all();

        return view('casos.index', compact('casos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('casos.create');
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
            'bairro'=>'required'
        ]);

        $caso = new Casos([
            'nome' => $request->get('nome'),
            'sobrenome' => $request->get('sobrenome'),
            'rua' => $request->get('rua'),
            'numero'=> $request->get('numero'),
            'complemento'=> $request->get('complemento'),
            'bairro'=> $request->get('bairro'),
            'regiao'=> $request->get('regiao')
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
        $caso = Casos::find($id);
        return view('casos.edit', compact('caso'));
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
            'bairro'=>'required'
        ]);

        $caso = Casos::find($id);
        $caso->nome = $request->get('nome');
        $caso->sobrenome = $request->get('sobrenome');
        $caso->rua = $request->get('rua');
        $caso->numero = $request->get('numero');
        $caso->complemento = $request->get('complemento');
        $caso->bairro = $request->get('bairro');
        $caso->regiao = $request->get('regiao');
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
