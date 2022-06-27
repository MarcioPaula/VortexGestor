@extends('template.site')

@section('titulo','Alunos')

@section('conteudo')

    <div class="container">
        <h3 class="center">Editar aluno</h3>
    <div class="row">

        <form action="{{route('admin.alunos.atualizar',$registro)}}">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="put">
            @include('admin.alunos._form')

            <button class="btn deep-orange">Atualizar dados</button>

        </form>

    </div>
    </div>


@endsection
