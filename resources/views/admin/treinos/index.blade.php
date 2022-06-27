@extends('template.site')

@section('titulo','Treinos')

@section('conteudo')

    <div class="container">
        <h3 class="center">Treinos</h3>
        <div class="row">
            <a class="btn green lighten-1" href="{{route('admin.treinos.criar')}}"><i class="material-icons">add</i></a>
        </div>
        <div class="row">
            <table class="highlight">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Treino</th>
                    <th>Descrição</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>
                @foreach($registros as $registro)
                    <tr>
                        <td>{{$registro->id}}</td>
                        <td>{{$registro->treino}}</td>
                        <td>{{$registro->descricao}}</td>
                        <td>
                            <a class="btn btn-small amber darken-3" href="{{route('admin.treinos.editar',$registro->id)}}"><i class="material-icons">edit</i></a>
                            <a class="btn btn-small blue darken-3" href="{{route('admin.treinos.download',$registro->arquivo)}}" target="_blank"><i class="material-icons">download</i></a>
                            <a class="btn btn-small red darken-3" href="{{route('admin.treinos.deletar',$registro->id)}}"><i class="material-icons">delete</i></a>
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
            M.toast({html: 'Treino excluido com sucesso !',classes:'amber darken-3'})
        </script>
        {{session(['delete' => 'inativo'])}}
    @endif

    @if(session('criar')=='ativo')
        <script>
            M.toast({html: 'Treino cadastrado com sucesso !',classes:'green'})
        </script>
        {{session(['criar' => 'inativo'])}}
    @endif

    @if(session('editar')=='ativo')
        <script>
            M.toast({html: 'Treino editado com sucesso !',classes:'amber darken-3'})
        </script>
        {{session(['editar' => 'inativo'])}}
    @endif
@endsection
