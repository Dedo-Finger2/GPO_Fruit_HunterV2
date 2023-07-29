@extends('layouts.page')
@section('title', 'Show')

@section('content')

    <h1>Detalhes do usuário</h1>

    <hr>

    <div class="container">
        <div class="row">
            <div class="col text-center mb-5">
                <img class="img-fluid rounded" src="/img/users/{{ $user->image }}" alt="profilePicture" width="450px" height="50px">
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="Name" class="form-label">Nome</label>
                    <input class="form-control" type="text" id="Name" disabled value="{{ $user->name }}">
                </div>
                <div class="mb-3">
                    <label for="Email" class="form-label">Email</label>
                    <input class="form-control" type="text" id="Email" disabled value="{{ $user->email }}">
                </div>
                <div class="mb-3">
                    <label for="Created" class="form-label">Created_at</label>
                    <input class="form-control" type="text" id="Created" disabled value="{{ $user->created_at }}">
                </div>
                <div class="mb-3">
                    <label for="Updated" class="form-label">Updated_at</label>
                    <input class="form-control" type="text" id="Updated" disabled value="{{ $user->updated_at }}">
                </div>
                <!-- Button trigger modal -->
                <div class="d-flex">
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Deletar
                    </button>
                    <form class="ms-auto" action="{{ route('users.edit', ['user' => $user]) }}" method="get">
                        @csrf
                        <button type="submit" class="btn btn-primary">Editar</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">ATENÇÃO</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Aviso! Essa ação não poderá ser desfeita, gostaria mesmo de deletar o usuário
                        <strong>{{ $user->name }}</strong> ?
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('users.destroy', ['user' => $user]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Deletar</button>
                        </form>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
