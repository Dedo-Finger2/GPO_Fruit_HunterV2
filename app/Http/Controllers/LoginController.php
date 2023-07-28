<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Método responsável por carregar a tela de login
     * @return string - View de login
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Método responsável por carregar a tela de login
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ],[
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'O email precisa ser um endereço de email válido.',
            'password.required' => 'O campo de senhas é obrigatório.',
        ]);

        $credenciais = $request->only('email', 'password');

        $autenticado = Auth::attempt($credenciais);

        if (!$autenticado) {
            return redirect()->route('login')->with('mensagem', 'Email ou senha incorretos, tente novamente.');
        }

        return redirect()->route('home.index')->with('mensagem', 'Logado com sucesso. Bem-vindo!');
    }

    /**
     * Método responsável por carregar a tela de login
     */
    public function destroy()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
