@extends('layouts.main')

@section('title', 'Avaliação')

@section('content')
<div class="editar">
    <h1>Avaliação - {{$colaborador->nome}}</h1>
        <form action="/cargocolaborador/update/{{$colaborador->id}}" class="formulario-editar" method="POST">
            @csrf
            <fieldset>
                <legend>Inserir novo colaborador</legend>
                <label for="nota_desempenho">Digite a nota:</label>
                <input type="text" id="nota_desempenho" name="nota_desempenho">
                
                <input type="submit" value="ENVIAR" class="botao">
            </fieldset>
        </form>
        
    </div>

@endsection