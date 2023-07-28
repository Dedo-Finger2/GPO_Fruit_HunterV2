@extends('layouts.page')
@section('title', 'Users')

@section('content')

<a href="{{ route('user.create') }}" class="btn btn-secondary">Criar novo usuário</a>

<h1>Lista de usuários</h1>

@if (session('mensagem'))
    <div class="alert alert-success col-4 container text-center" role="alert">
        <strong>{{ session('mensagem') }}</strong>
    </div>
@endif

<ul>
    @foreach ($users as $user)
        <li>Nome: {{ $user->name }}</li>
        <li>Email: {{ $user->email }}</li>
        <hr>
    @endforeach
</ul>

@endsection
