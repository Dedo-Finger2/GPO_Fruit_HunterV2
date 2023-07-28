@extends('layouts.page')
@section('title', 'Edit')

@section('content')

<h1>Editando usuário</h1>

<div class="container align-items-center p-4 bg-body-secondary rounded col-4 justify-content-center">
    <form action="{{ route('user.update', ['user'=>$user]) }}" method="POST">
        @csrf
        @method('PUT')
        <h2 class="text-center">Edite suas creênciais</h2>
        <hr>
        <div class="mb-3">
            <label for="Name" class="form-label">Nome</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $user->name }}" id="Name" name="name" placeholder="Enter your name...">
            @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{ $user->email }}" id="Email" name="email" placeholder="Enter your email...">
            @error('email')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="EmailConfirm" class="form-label">Confirmar email</label>
            <input type="text" class="form-control @error('emailConfirm') is-invalid @enderror" value="{{ $user->email }}" id="EmailConfirm" name="emailConfirm" placeholder="Confirm your email...">
            @error('emailConfirm')
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
            <label for="PasswordConfirm" class="form-label">Confirmar senha</label>
            <input type="text" class="form-control @error('passwordConfirm') is-invalid @enderror" id="PasswordConfirm" name="passwordConfirm" placeholder="Confirm your password...">
            @error('passwordConfirm')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" type="submit">Editar</button>
        </div>
    </form>
</div>


@endsection
