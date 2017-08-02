<?php

namespace App\Http\Controllers;

use App\Carrinho;
use App\Ingrediente;
use App\Pizza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

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

        $ingredientes = Ingrediente::all();
        $quantidade = Input::get('quantidade');

        for ($i = 0; $i < count($quantidade); $i++)
        {
            if ($quantidade[$i] != 0) {
                $pizza -> ingredientes() -> attach($ingredientes[$i], ['qtde_porcoes' => $quantidade[$i]]);
            }
        }



        return redirect('pizzas');
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

        return view('pizzas.show', compact('pizza'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $pizza = Pizza::find($id);
        $todosIngredientes = Ingrediente::all();
        $ingredientesPizza = $pizza -> ingredientes() -> get();

        if (! $pizza)
            abort(404);

        return view('pizzas.edit')
            ->with(compact('pizza', 'todosIngredientes', 'ingredientesPizza'));
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


        /*
        $pivo = array_fill(0, count($ingredientes), ['qtde_porcoes' => 1]);
        $syncData = array_combine($ingredientes, $pivo);
        $pizza -> ingredientes() -> sync($syncData);
        */
        $qt = (array) Input::get('quantidade');

        $ingredientes = array();
        $quantidade = array();

        /*
         Percorrer o vetor de quantidade, se a quantidade for > 0, eu adiciono o ingrediente(id) na
         variavel $ingredientes
        */
        for ($i = 0; $i < count($qt); $i++) {
            if ($qt[$i] > 0) {
                array_push($ingredientes, $i + 1);
                array_push($quantidade, $qt[$i]);
            }
        }


        $syncData = array();
        for($i = 0; $i < count($quantidade); $i++) {
            $syncData[$i] = array('qtde_porcoes' => $quantidade[$i]);
        }
        $syncData = array_combine($ingredientes, $syncData);

        $pizza -> ingredientes() -> sync($syncData);

        return redirect('pizzas');
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

        return redirect('pizzas') -> with('message', 'Pizza excluída com sucesso!');
    }

    public function monte_sua_pizza()
    {
        $ingredientes = Ingrediente::all();

        return view('pizzas.monte-sua-pizza', compact('ingredientes'));
    }

    public function cardapio()
    {
      $cardapio = Pizza::all();
      return view('pizzas.cardapio', compact('cardapio'));
    }

    public function getAddCarrinho(Request $request, $id) {
        $pizza = Pizza::find($id);
        $oldCarrinho = Session::has('carrinho') ? Session::get('carrinho') : null;

        $carrinho = new Carrinho($oldCarrinho);
        $carrinho -> adicionarPizza($pizza, $id);

        $request -> session() -> put('carrinho', $carrinho);

        return redirect('/cardapio');
    }
}
