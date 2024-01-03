@extends('layouts.main')

@section('title', 'Colaboradores')

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
                <th>Id da unidade</th>
                <th>Nome</th>
                <th>Cpf</th>
                <th>Email</th>
                <th>Cargo</th>
            </tr>
            @foreach($colaboradores as $colaborador)
            <tr>
                <td>{{$colaborador->id}}</td>
                <td>{{$colaborador->unidade->nome_fantasia}}</td>
                <td>{{$colaborador->nome}}</td>
                <td>{{$colaborador->cpf}}</td>
                <td>{{$colaborador->email}}</td>
                <td>{{$colaborador->cargo}}</td>
                <td><a href="/colaborador/{{$colaborador->id}}"><input type="button" value="EDITAR" class="botao"></a></td>
                <td><a href="/cargocolaborador/{{$colaborador->id}}"><input type="button" value="AVALIAR" class="botao"></a></td>
            </tr>
            @endforeach
        </table>
    </div>
    <div>
        <form action="/colaboradores/criar" class="formulario" method="POST">
            @csrf
            <fieldset>
                <legend>Inserir novo colaborador</legend>
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome">
                <label for="cpf">CPF:</label>
                <input type="text" id="CPF" name="cpf" value="{{$colaborador->cpf}}">
                <label for="unidade_id">Id da unidade:</label>
                <input type="text" id="unidade_id" name="unidade_id">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email">
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
</main>

@endsection

