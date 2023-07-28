@extends('layouts.page')
@section('title', 'Register')

@section('content')

<h1>Cadastro de usuário</h1>

<div class="container d-flex align-items-center py-4 bg-body-tertiary col-4 justify-content-center">
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <h2 class="text-center">Registre-se</h2>
        <hr>
        <div class="mb-3">
            <label for="Name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="Name" name="name" placeholder="Enter your name...">
        </div>
        <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="text" class="form-control" id="Email" name="email" placeholder="Enter your email...">
        </div>
        <div class="mb-3">
            <label for="Password" class="form-label">Senha</label>
            <input type="text" class="form-control" id="Password" name="password" placeholder="Enter your password...">
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" type="submit">Registrar</button>
        </div>
    </form>
</div>


@endsection
