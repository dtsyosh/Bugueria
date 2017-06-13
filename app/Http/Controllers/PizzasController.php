<?php

namespace App\Http\Controllers;

use App\Ingrediente;
use App\Pizza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class PizzasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pizzas = Pizza::all();

        return view('pizzas.index', compact('pizzas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ingredientes = Ingrediente::all();
        return view('pizzas.create', compact('ingredientes'));
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
        $pizza = new Pizza;

        $pizza -> cardapio = $request -> has('cardapio');
        $pizza -> nome = $request -> nome;
        $pizza -> preco = $request -> preco;

        $pizza -> save();

        $ingredientes = Input::get('arrayIngredientes');

        foreach ($ingredientes as $ingrediente)
        {
            $pizza -> ingredientes() -> attach($ingrediente, ['qtde_porcoes' => 1]);
        }



        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pizza = Pizza::find($id);

        if (! $pizza)
            abort(404);

        return view('pizza.detailpage', compact('pizza'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pizza = Pizza::find($id);

        if (! $pizza)
            abort(404);

        return view('pizza.edit', compact('pizza'));
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
        $pizza = Pizza::find($id);

        $pizza -> nome = $request -> nome;
        $pizza -> preco = $request -> preco;


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pizza = Pizza::find($id);

        $pizza -> ingredientes() -> detach();
        $pizza -> delete();

        return redirect('pizza.index') -> with('message', 'Pizza excluída com sucesso!');
    }
}
