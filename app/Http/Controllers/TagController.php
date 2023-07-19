<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class TagController extends Controller
{
    protected $tag;

    public function __construct(Tag $tag)
    {
        $this->tag = $tag;
    }

    public function index(Request $request)
    {
        $pesquisar = $request->pesquisar;
        $findTag = $this->tag->getTagsPesquisarIndex($pesquisar ?? '');

        return view('pages.tags.paginacao', compact('findTag'));
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $buscaRegistro = Tag::find($id);
        $buscaRegistro->delete();

        return response()->json(['success' => true]);
    }

    public function cadastrarTag(Request $request)
    {
        if ($request->method() == "POST") {
            $data = $request->all();
            Tag::create($data);

            Toastr::success('Gravado com sucesso');
            return redirect()->route('tags.index');
        }
        return view('pages.tags.create');
    }

    public function atualizarTag(Request $request, $id)
    {
        if ($request->method() == 'PUT') {
            $data = $request->all();
            $buscaRegistro = Tag::find($id);
            $buscaRegistro->update($data);

            Toastr::success('Dados gravados com sucesso');
            return redirect()->route('tags.index');
        }
        $findTag = Tag::where('id', '=', $id)->first();

        return view('pages.tags.atualiza', compact('findTag'));
    }
}
