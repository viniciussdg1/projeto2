<?php

namespace App\Http\Controllers;

use App\Models\funcionario;
use App\Models\mesa;
use Illuminate\Http\Request;

class MesaController extends Controller
{

    public function index(){
        $mesas = \App\Models\mesa::all();

        return view('mesas.index', compact('mesas'));
    }


    public function novo() {
        $dados['mesa'] = new mesa;
        return view('mesas.criar', $dados);
    }


    public function mesas(Request $request) {
        dd($request->all());
    }

    public function cadastrar(Request $request) {

        //Valida
        $request->validate([
            'nome'  => 'required',
            'email'=> 'required',
            'numero' => 'required',
            'cargo'=> 'required',
        ]);

        $mesa = mesa::create($request->all());

        return redirect()->route('mesas.index')->with('sucesso', 'mesa cadastrada com sucesso');

    }

    /**
     * Abre a tela de edição de livros
     */
    public function edicao(int $id) {
        $dados['mesa'] = mesa::find($id);
        return view('mesas.edicao', $dados);
    }

    /**
     * Salva o livro a ser editado
     */
    public function editar(Request $request, int $id) {

        $request->validate([
            'nome'  => 'required',
            'email'=> 'required',
            'cargo' => 'required',
            'celular'=> 'required'
        ]);

        mesa::where('id', $id)->update($request->except('_token'));


        return redirect()->route('mesas.index')->with('sucesso', 'mesa atualizada com sucesso');
    }

    /**
     * Abre a tela de visualização de livros
     */
    public function visualizar(int $id) {
        $dados['mesa'] = mesa::find($id);
        return view('mesas.visualizar', $dados);
    }


    public function finalizar(int $id) {
        $dados['mesa'] = mesa::find($id);
        return view('mesas.finalizar', $dados);
    }

    /**
     * Exclui um livro
     */
    public function encerrar(Request $request, int $mesaID) {
        $mesa = mesa::find($mesaID);
        $mesa->produtos()->detach();
        $mesa->total = 0;
        $mesa->status = 0;
        $mesa->save();

        return redirect()->route('mesas.index')->with('sucesso', 'Mesa Encerrada');
    }
}
