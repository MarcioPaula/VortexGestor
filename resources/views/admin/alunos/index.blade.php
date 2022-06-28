@extends('template.site')

@section('titulo','Alunos')

@section('cabeçalho','- Alunos')

@section('conteudo')

    <div class="container">
        <br><br>
        <div class="row">
            <a class="btn green lighten-1" href="{{route('admin.alunos.criar')}}"><i class="material-icons">add</i></a>
        </div>
    <div class="row">
    <table class="highlight">
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
                <a class="btn btn-small amber darken-3" href="{{route('admin.alunos.editar',$registro->id)}}"><i class="material-icons">edit</i></a>
                <a class="btn btn-small red darken-3" onclick="notifica()" href="{{route('admin.alunos.deletar',$registro->id)}}"><i class="material-icons">delete</i></a>

            </td>

        </tr>
        @endforeach
        </tbody>
    </table>
    </div>

        <ul class="pagination center">
            {{-- Previous Page Link --}}
            @if ($registros->onFirstPage())
                <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            @else
                <li class="waves-effect"><a href="{{ $registros->previousPageUrl() }}"><i class="material-icons">chevron_left</i></a></li>
            @endif

            {{-- Page Number Links --}}
            @for($i=1; $i<=$registros->lastPage(); $i++)
                @if($i==$registros->currentPage())
                    <li class="active"><a href="?page={{$i}}">{{$i}}</a></li>
                @else
                    <li class="waves-effect"><a href="?page={{$i}}">{{$i}}</a></li>
                @endif
            @endfor

            {{-- Next Page Link --}}
            @if ($registros->hasMorePages())
                <li class="waves-effect"><a href="{{ $registros->nextPageUrl() }}"><i class="material-icons">chevron_right</i></a></li>
            @else
                <li class="disabled"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
            @endif
        </ul>
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
