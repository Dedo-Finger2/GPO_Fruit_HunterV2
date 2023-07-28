@extends('layouts.page')
@section('title', 'Users')

@section('content')

    @if (session('mensagem'))
        <div class="alert alert-success col-4 container text-center" role="alert">
            <strong>{{ session('mensagem') }}</strong>
        </div>
    @endif

    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <h1 class="">Lista de usuários</h1>
            <a href="{{ route('user.create') }}" class="btn btn-success">Criar novo usuário</a>
        </div>
    </div>

    <hr class="mb-5">

    <div class="table-responsive">
        <table
            class="table table-striped
        table-hover
        table-borderless
        table-primary
        align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ date('d/m/Y H:i', strtotime($user->created_at)) }}</td>
                        <td>{{ date('d/m/Y H:i', strtotime($user->updated_at)) }}</td>
                        <td class="contaner d-flex justify-content-between">
                            <form action="{{ route('user.show', ['user' => $user]) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-secondary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">View</button>
                            </form>
                            <form action="{{ route('user.edit', ['user' => $user]) }}" method="get">
                                @csrf
                                <button type="submit" class="btn btn-primary">Editar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th>Ações</th>
                </tr>
            </tfoot>
        </table>
    </div>

@endsection
