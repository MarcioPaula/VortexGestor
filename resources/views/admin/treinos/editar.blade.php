@extends('template.site')

@section('titulo','Alunos')

@section('conteudo')

    <div class="container">
        <h3 class="center">Editar treino</h3>
    <div class="row">

        <form action="{{route('admin.treinos.atualizar',$registro)}}">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="put">
            @include('admin.treinos._form')

            <button class="btn deep-orange">Atualizar dados</button>

        </form>

    </div>
    </div>


@endsection
