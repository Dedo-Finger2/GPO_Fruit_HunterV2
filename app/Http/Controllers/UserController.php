<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Método responsável por retornar a tela de listagem de usuários
     * @return string|array - View de usuários com um array de usuários do banco de dados
     */
    public function index()
    {
        $users = User::all();

        return view('userViews.users', ['users' => $users]);
    }

    /**
     * Método responsável por mostrar a tela de configuração da conta do usuário
     * @param User $user - Usuário sendo editado
     * @return string|User - View de configurações de usuário + Usuário sendo configurado
     */
    public function config(User $user)
    {
        return view('userViews.userConfig', ['user' => $user]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('userViews.userCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
