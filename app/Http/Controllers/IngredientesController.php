<?php

namespace App\Http\Controllers;

use App\Ingredientes;
use Illuminate\Http\Request;

class IngredientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingredientes = Ingredientes::all();

        return view('ingredientes.index')->with('ingredientes', $ingredientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ingredientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required',
            'preco' => 'required'
        ]);

        $ingrediente = new Ingredientes;

        $ingrediente -> nome = $request -> nome;
        $ingrediente -> preco = $request -> preco;
        $ingrediente -> disponivel = true;

        $ingrediente -> save();

        return redirect('ingredientes') -> with('message', 'Ingredientes salvo com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ingredientes = Ingredientes::find($id);

        if(! $ingredientes) {
            abort(404);
        }
        return view('ingredientes.show', compact($ingredientes));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ingredientes = Ingredientes::find($id);

        if(! $ingredientes) {
            abort(404);
        }
        return view('ingredientes.edit', compact($ingredientes));
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
        $this -> validate($request, [
            'nome' => 'required',
            'preco' => 'required',
            'disponivel' => 'required'
        ]);

        $ingredientes = Ingredientes::find($id);

        $ingredientes -> nome = $request -> nome;
        $ingredientes -> preco = $request -> preco;
        $ingredientes -> disponivel = $request -> disponivel;

        $ingredientes -> save();

        return redirect('ingredientes') -> with('message', 'Ingrediente atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ingrediente = Ingredientes::find($id);

        $ingrediente -> delete();

        return redirect('ingredientes') -> with('message', 'Ingrediente apagado com sucesso!');
    }
}
