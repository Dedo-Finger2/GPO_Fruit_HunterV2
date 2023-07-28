@extends('layouts.pageAuth')
@section('title', 'Login')

@section('content')

<h1>Login de usuário</h1>
<hr>

@if (session('mensagem'))
    <div class="alert alert-danger" role="alert">
        <strong>{{ session('mensagem') }}</strong>
    </div>
@endif

<div class="container align-items-center p-4 bg-body-secondary rounded col-4 justify-content-center">
    <form action="{{ route('login.store') }}" method="POST">
        @csrf
        <h2 class="text-center">Login</h2>
        <hr>
        <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="Email" name="email" placeholder="Enter your email...">
            @error('email')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="Password" class="form-label">Senha</label>
            <input type="text" class="form-control @error('password') is-invalid @enderror" id="Password" name="password" placeholder="Enter your password...">
            @error('password')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" type="submit">Logar</button>
        </div>
    </form>
</div>

@endsection
