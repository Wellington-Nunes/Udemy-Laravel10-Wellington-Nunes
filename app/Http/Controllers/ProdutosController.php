<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
    {
        $findProdutos = Produtos::all();
      
        return view('pages.produtos.paginacao', compact('findProdutos'));
    }
}
