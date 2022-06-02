<?php

namespace App\Http\Controllers;

use App\Models\funcionario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    //
    public function login(Request $request) {

        $usuario = Funcionario::where('email', $request->email)->where('senha', $request->senha)->first();

        if ($usuario) { //Está logado
              session(['usuario' => $usuario]); //Salva na sessão para controlar com o middleware
              if ($usuario->cargo == '1') {
                 return redirect()->route('mesas.index');
              }else {
                  return view('mesas.index');
              }
        
        }else {
            return view('cadastro');
        }
    }

    public function logout() {
        return view('login');
    }

    public function cadastrar() {
        return view('cadastro');

    }

    public function logar(Request $request) {

        $novoFuncionario = new funcionario;

        $novoFuncionario->nome = $request->nome;
        $novoFuncionario->email = $request->email;
        $novoFuncionario->senha = $request->senha;
        $novoFuncionario->cargo = $request->cargo;

        $novoFuncionario->save();


        return view('login');
    }
}
