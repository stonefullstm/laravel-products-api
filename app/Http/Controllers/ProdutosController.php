<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function index() {
        return Produto::all();
    }

    public function getById($id) {
        return Produto::findOrFail($id);
    }

    public function insert(Request $request) {
        $produto = Produto::create([
            "nome"=>$request->input("nome"),
            "preco"=>$request->input("preco")
        ]);

        return $produto;
    }

    public function update(Request $request, $id) {
        $produto = Produto::findOrFail($id);
        $produto->nome = $request->input('nome');
        $produto->preco = $request->input('preco');

        if ($produto->save()) {
            return $produto;
        }

    }

    public function delete(Produto $produto) {
        $produto->delete();
    }
}
