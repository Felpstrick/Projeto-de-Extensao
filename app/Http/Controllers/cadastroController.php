<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class cadastroController extends Controller
{
    //
    public function formCadastro (){
        return view('auth.cadastro');
    }

    public function cadastroUsuario(Request $request){
        //tratamento dos dados recebidos do formulário de cadastro
        $dados = $request->validate([
            'name'          => ['required', 'string', 'max:255'],
            'email'         => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password'      => ['required', 'confirmed', Password::min(8)],
        ], [
            'required'                 => 'Preencha este campo.',
            'email.email'              => 'Informe um e-mail válido.',
            'email.unique'             => 'Este e-mail já está cadastrado.',
            'password.confirmed'       => 'A confirmação da senha não confere.',
            'password.min'             => 'A senha deve ter pelo menos 8 caracteres.',
        ]);

        //cria o usuário no banco de dados
        $usuario = User::create([
            'name'     => $dados['name'],
            'email'    => $dados['email'],
            'perfil'   => 'aluno',
            'password' => Hash::make($dados['password']),
        ]);

        //autentica o usuário recém-cadastrado
        Auth::login($usuario);

        $request->session()->regenerate();
        return redirect()->route('dashboard')->with('sucesso', 'Cadastro realizado com sucesso!');
    }
}
