@extends('template.site')

@section('titulo','Alunos')

@section('conteudo')

    <div class="container">
        <h3 class="center">Treinos</h3>

        <div class="row">
            <table class="striped">
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
                            <a class="btn amber darken-3" href="{{route('admin.treinos.editar',$registro->id)}}"><i class="material-icons">edit</i></a>
                            <a class="btn blue darken-3" href="{{route('admin.treinos.download',$registro->arquivo)}}" target="_blank"><i class="material-icons">download</i></a>
                            <a class="btn red darken-3" href="{{route('admin.treinos.deletar',$registro->id)}}"><i class="material-icons">delete</i></a>


                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
        <div class="row">
            <a class="btn green lighten-1" href="{{route('admin.treinos.criar')}}"><i class="material-icons">add</i></a>
        </div>
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

oi git
