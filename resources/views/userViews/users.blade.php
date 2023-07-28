@extends('layouts.page')
@section('title', 'Users')

@section('content')

<a href="{{ route('user.create') }}" class="btn btn-success">Criar novo usuário</a>

<h1 class="mt-5 mb-2 text-center">Lista de usuários</h1>
<hr class="mb-5">

@if (session('mensagem'))
    <div class="alert alert-success col-4 container text-center" role="alert">
        <strong>{{ session('mensagem') }}</strong>
    </div>
@endif

<ul>
    @foreach ($users as $user)
        <li><strong>Nome:</strong> {{ $user->name }}</li>
        <li><strong>Email:</strong> {{ $user->email }}</li>
        <li><strong>Data Cadastro:</strong> {{ date('d/m/Y H:i', strtotime($user->created_at)) }}</li>
        <form action="{{ route('user.show', ['user' => $user]) }}" method="post">
            @csrf
            <button type="submit" class="btn btn-secondary">View</button>
        </form>
        <form action="{{ route('user.edit', ['user' => $user]) }}" method="get">
            @csrf
            <button type="submit" class="btn btn-primary">Editar</button>
        </form>
        <hr>
    @endforeach
</ul>

@endsection
