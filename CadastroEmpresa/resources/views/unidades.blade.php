@extends('layouts.main')


@section('title', 'Unidades')

@section('content')
<main>
    @if(@session('msg'))
    <p class="msg">
        {{session('msg')}}
    </p>
    @endif
    <h1>Página de Unidades</h1>
    <div>
        <table class="tabela">
            <tr>
                <th>ID</th>
                <th>Nome Fantasia</th>
                <th>Razão Social</th>
                <th>Cnpj</th>
                
            </tr>
           @foreach($unidades as $unidade)
            <tr>
                <td>{{$unidade->id}}</td>
                <td>{{$unidade->nome_fantasia}}</td>
                <td>{{$unidade->razao_Social}}</td>
                <td>{{$unidade->cnpj}}</td>
            </tr>

           @endforeach
        </table>
    </div>
    <div>
        <form action="/unidades/criar" class="formulario" method="POST">
            @csrf
            <fieldset>
                <legend>Inserir nova unidade</legend>
                <label for="nome_fantasia">Nome fantasia:</label>
                <input type="text" id="nome_fantasia" name="nome_fantasia">
                <label for="razao_social">Razão Social:</label>
                <input type="text" id="razao_social" name="razao_Social">
                <label for="cnpj">CNPJ:</label>
                <input type="text" id="cnpj" name="cnpj">
                <input type="submit" value="ENVIAR" class="botao">
            </fieldset>
        </form>
    </div>
</main>

@endsection