<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstoqueController extends Controller
{

    public function index()
    {
        $estoque = Estoque::all();

        return view('estoque.index', compact('estoque'));
    }

    public function destroy($id)
    {
        $estoque = Estoque::find($id);

        $estoque->delete();

        return redirect('ingredientes');
    }

}
