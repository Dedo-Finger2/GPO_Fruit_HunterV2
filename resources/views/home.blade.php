@extends('layouts.page')
@section('title', 'Home')

@section('content')
    <h1>Home</h1>
    <hr>

    @if (session('mensagem'))
        <div class="alert alert-success text-center" role="alert">
            <strong> {{ session('mensagem') }} </strong>
        </div>

    @endif

@endsection
