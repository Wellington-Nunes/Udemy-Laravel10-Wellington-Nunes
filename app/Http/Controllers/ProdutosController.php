<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestProduto;
use App\Models\Componentes;
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
        $id=$request->id;
        $buscaRegistro = Produtos::find($id);
        $buscaRegistro->delete();

        return response()->json(['success' => true]);
    }

    public function cadastrarProduto(FormRequestProduto $request)
    {
        if($request->method() == "POST") {
            $data=$request->all();
            $componentes = new Componentes();
            $data['valor'] = $componentes->formatacaoMascaraDinheiroDecimal($data['valor']);
            Produtos::create($data);

            return redirect()->route('produtos.index');
        };
        return view('pages.produtos.create');
    }
}
