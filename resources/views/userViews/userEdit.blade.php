@extends('layouts.page')
@section('title', 'Edit')

@section('content')

<div class="container">
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="">Editando usuário</h1>
    </div>
</div>

<hr>

<div class="container align-items-center p-4 bg-body-secondary rounded col-4 justify-content-center">
    <form action="{{ route('users.update', ['user'=>$user]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h2 class="text-center">Edite suas creênciais</h2>
        <hr>
        <div class="mb-3">
            <label for="Image" class="form-label">Nova imagem</label>
            <input type="file" class="form-control @error('image') is-invalid @enderror" id="Image" name="image">
            @error('image')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
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
            <label for="Password" class="form-label">Senha</label>
            <input type="text" class="form-control @error('password') is-invalid @enderror" id="Password" name="password" placeholder="Enter your password...">
            @error('password')
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
