<?php

namespace App\Http\Controllers;

use App\Ingrediente;
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
        $ingredientes = Ingrediente::all();

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
            'preco_porcao' => 'required',
            'unidade' => 'required',
            'qtde_porcao' => 'required',
            'qtde_total' => 'required'
        ]);

        $ingrediente = new Ingrediente;

        $ingrediente -> nome = $request -> nome;
        $ingrediente -> preco_porcao = $request -> preco_porcao;
        $ingrediente -> unidade = $request -> unidade;
        $ingrediente -> qtde_porcao = $request -> qtde_porcao;
        $ingrediente -> qtde_total = $request -> qtde_total;
        $ingrediente -> save();

        return redirect('ingredientes') -> with('message', 'Ingrediente salvo com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ingrediente = Ingrediente::find($id);

        if(! $ingrediente) {
            abort(404);
        }
        return view('ingredientes.show', compact('ingrediente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ingrediente = Ingrediente::find($id);

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
            'preco_porcao' => 'required',
        ], [
            'nome.required' => 'Este campo é obrigatório.',
            'nome.min' => 'Quantidade mínima de caracteres = 3.',
            'preco_porcao.required' => 'Este campo é obrigatório.'
        ]);

        $ingrediente = Ingrediente::find($id);

        $ingrediente -> nome = $request -> nome;
        $ingrediente -> preco = $request -> preco;


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
        $ingrediente = Ingrediente::find($id);

        $ingrediente -> delete();

        return redirect('ingredientes') -> with('message', 'Ingrediente apagado com sucesso!');
    }
}
