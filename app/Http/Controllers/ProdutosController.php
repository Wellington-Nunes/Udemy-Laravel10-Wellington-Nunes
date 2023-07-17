<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    protected $produtos;
    
    public function __construct(Produtos $produtos)
    {
        $this->produtos = $produtos;
    }

    public function index(Request $request)
    {
        $pesquisar = $request->pesquisar;
        $findProdutos = $this->produtos->getProdutosPesquisarIndex(search: $pesquisar ?? '');
      
        return view('pages.produtos.paginacao', compact('findProdutos'));
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $buscaRegistro = Produtos::find($id);
        $buscaRegistro->delete();

         return response()->json(['success' => true]);
    }
}
