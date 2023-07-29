<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserFormRequest;
use App\Http\Requests\UpdateUserFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
     * Método responsável por persistir os dados do usuário no banco de dados
     * @param StoreUserFormRequest $request - Requisições do usuário sendo validada porn ossa classe especial
     */
    public function store(StoreUserFormRequest $request)
    {
        $data = $request->validated();

        if ($data['image']) {
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . "." . $extension;

            $requestImage->move(public_path('img/users'), $imageName);

            $data['image'] = $imageName;
        }

        User::create($data);

        return redirect()->route('users.index')->with('mensagem', 'Usuário criado com sucesso!');
    }



    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('userViews.userShow', ['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('userViews.userEdit', ['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserFormRequest $request, User $user)
    {
        $data = $request->validated();

        if (isset($data['image'])) {
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . "." . $extension;

            $requestImage->move(public_path('img/users'), $imageName);

            $data['image'] = $imageName;
        }

        $updated = $user->update($data);

        if ($updated) {
            return redirect()->route('users.index')->with('mensagem', 'Usuário editado com sucesso!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $deleted = $user->delete();

        if ($deleted) {
            return redirect()->route('users.index')->with('mensagem', 'Usuário deletado com sucesso!');
        }
    }
}
