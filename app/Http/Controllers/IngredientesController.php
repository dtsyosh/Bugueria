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

        return view('ingredientes.index', compact('ingredientes'));
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
        $this -> validate($request, [
            'nome' => 'required|min:3',
            'preco' => 'required',
        ], [
            'nome.required' => 'Este campo é obrigatório.',
            'nome.min' => 'Quantidade mínima de caracteres = 3.',
            'preco.required' => 'Este campo é obrigatório.'
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
        return view('ingredientes.show', compact('ingredientes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ingrediente = Ingredientes::find($id);

        if(! $ingrediente) {
            abort(404);
        }
        return view('ingredientes.edit', compact('ingrediente'));
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
            'nome' => 'required|min:3',
            'preco' => 'required',
        ], [
            'nome.required' => 'Este campo é obrigatório.',
            'nome.min' => 'Quantidade mínima de caracteres = 3.',
            'preco.required' => 'Este campo é obrigatório.'
        ]);

        $ingrediente = Ingredientes::find($id);

        $ingrediente -> nome = $request -> nome;
        $ingrediente -> preco = $request -> preco;

        $ingrediente -> disponivel = $request -> has('disponivel');

        $ingrediente -> save();

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
