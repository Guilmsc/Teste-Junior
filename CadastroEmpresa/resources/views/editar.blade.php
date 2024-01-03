@extends('layouts.main')

@section('title', 'Editar - ' . $colaborador->nome)

@section('content')

<div class="editar">
    <h1>Editando - {{$colaborador->nome}}</h1>
        <form action="/colaboradores/update/{{$colaborador->id}}" class="formulario-editar" method="POST">
            @csrf
            @method('PUT')
            <fieldset>
                <legend>Inserir novo colaborador</legend>
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" placeholder="{{$colaborador->nome}}">
                <label for="cpf">CPF:</label>
                <input type="text" id="CPF" name="cpf" placeholder="{{$colaborador->cpf}}">
                <label for="unidade_id">Id da unidade:</label>
                <input type="text" id="unidade_id" name="unidade_id" placeholder="{{$colaborador->unidade_id}}">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" placeholder="{{$colaborador->email}}">
                <label for="cargo">Qual o cargo?</label>
                <select name="cargo" id="cargo" name="cargo">
                    @foreach($cargos as $cargo) 
                    <option value="{{$cargo->cargo}}">{{$cargo->cargo}}</option>
                    @endforeach
                </select>
                <input type="submit" value="ENVIAR" class="botao">
            </fieldset>
        </form>
        
    </div>
@endsection