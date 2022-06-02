<?php

namespace App\Http\Controllers;

use App\Models\mesa;
use Illuminate\Http\Request;
use App\Models\produto;

class ProdutoController extends Controller
{
    private $produto;

    public function __construct(produto $produto)
    {
        $this->produto = $produto;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(int $mesaID)
    {
        $produtos = \App\Models\produto::all();

        return view('mesas.produtos.index', compact('produtos', 'mesaID'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adicionar(Request $request, int $mesaID, int $produtoID)
    {
        //
        $mesa = mesa::find($mesaID);
        $produto = produto::find($produtoID);
        $mesa->produtos()->attach($produto);
        $mesa->total += $produto->preco;
        $mesa->status = 1;
        $mesa->save();


        return redirect()->route('produto.index', [$mesaID])->with('sucesso', 'Produto adicionado');
    } 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


        $novoProduto = new produto;

        $novoProduto->nome = $request->nome;
        $novoProduto->preco = $request->preco;
        $novoProduto->descricao = $request->descricao;

        $novoProduto->save();
        return view('mesas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $produto = $this->produto->find($id);
        return view('produtos.edit', compact('produto'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function excluir(Request $request, int $mesaID, int $produtoID)
    {
        
        $mesa = mesa::find($mesaID);
        $produto = produto::find($produtoID);
        $mesa->produtos()->detach($produtoID);
        $mesa->total -= $produto->preco;
        $mesa->save();
        

        return redirect()->route('produto.index', [$mesaID])->with('sucesso', 'Produto removido');
    }
}
