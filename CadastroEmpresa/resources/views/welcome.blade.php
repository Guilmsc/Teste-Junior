@extends('layouts.main')


@section('title','Bem vindo')


@section('content')
    <main class="boas-vindas">
        <h1>Bem vindo ao sistema de cadastros</h1>
        <p class="titulo-principal"><h2 class="titulo">Clique em um link para começar</h2></p>
        <p class="conteudo-principal">
        <a href="/unidades" class="link-inicial">Unidades</a> |
        <a href="/colaboradores" class="link-inicial">Colaboradores</a>
        </p>
    </main>

@endsection