<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Bairros;

class BairrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bairros = bairros::paginate(5);

        return view('bairros.index', compact('bairros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bairros.create');
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
            'bairro'=>'required',
            'regiao'=>'required'
        ]);

        $bairro = new Bairros([
            'bairro' => $request->get('bairro'),
            'regiao' => $request->get('regiao')
        ]);
        $bairro->save();
        return redirect('/bairros')->with('success', 'Bairro salvo!');
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
        $bairro = bairros::find($id);
        return view('bairros.edit', compact('bairro'));
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
            'bairro'=>'required',
            'regiao'=>'required'
        ]);

        $bairro = bairros::find($id);
        $bairro->bairro = $request->get('bairro');
        $bairro->regiao = $request->get('regiao');
        $bairro->save();

        return redirect('/bairros')->with('success', 'Bairro alterado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bairro = bairros::find($id);
        $bairro->delete();

        return redirect('/bairros')->with('success', 'Bairro deleted!');
    }
}
