<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class loginController extends Controller
{
    //redireciona ao formulário de login
    public function formLogin (){
        return view('auth.login');
    }

    public function login(Request $request){
       $dados = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
       ]);
       if(Auth::attempt($dados, $request->boolean('remember') /*adiciona a opção de lembrar do usuário */)){
            $request->session()->regenerate(); //gera a sessão do usuário
            return redirect()->intended('/home'); //redireciona para a página inicial
       }

       return back()->withErrors(['email' => 'usuário ou senha inválidos'])->onlyInput('email'); //retorna para a página de login com uma mensagem de erro

    }

    public function logout(Request $request){
        Auth::logout(); //desloga o usuário
        $request->session()->invalidate(); //invalida a sessão do usuário
        $request->session()->regenerateToken(); //gera um novo token de sessão
        return redirect('/home'); //redireciona para a página inicial
    }
}
