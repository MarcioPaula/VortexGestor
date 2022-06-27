@extends('template.site')

@section('titulo','Alunos')

@section('conteudo')

    <div class="container">
        <h3 class="center">Lista de Alunos</h3>

    <div class="row">
    <table class="striped">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Cpf</th>
            <th>Treino</th>
            <th>Ação</th>
        </tr>
        </thead>
        <tbody>
        @foreach($registros as $registro)
        <tr>
            <td>{{$registro->id}}</td>
            <td>{{$registro->nome}}</td>
            <td>{{$registro->cpf}}</td>
            <td>{{$registro->treino}}</td>

            <td>
                <a class="btn amber darken-4" href="{{route('admin.alunos.editar',$registro->id)}}"><i class="material-icons">edit</i></a>
                <a class="btn red lighten-3" onclick="notifica()" href="{{route('admin.alunos.deletar',$registro->id)}}"><i class="material-icons">delete</i></a>

            </td>

        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    <div class="row">
        <a class="btn green lighten-1" href="{{route('admin.alunos.criar')}}"><i class="material-icons">add</i></a>
    </div>
    </div>

    @if(session('delete')=='ativo')
    <script>
        M.toast({html: 'Aluno excluido com sucesso !',classes:'amber darken-3'})
    </script>
    {{session(['delete' => 'inativo'])}}
    @endif

    @if(session('criar')=='ativo')
        <script>
            M.toast({html: 'Aluno cadastrado com sucesso !',classes:'green'})
        </script>
        {{session(['criar' => 'inativo'])}}
    @endif

    @if(session('editar')=='ativo')
        <script>
            M.toast({html: 'Dados editados com sucesso !',classes:'amber darken-3'})
        </script>
        {{session(['editar' => 'inativo'])}}
    @endif


@endsection
