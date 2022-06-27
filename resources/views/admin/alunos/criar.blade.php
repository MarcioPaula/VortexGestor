@extends('template.site')

@section('titulo','Alunos')

@section('conteudo')

    <div class="container">
        <h3 class="center">Adicionar aluno</h3>
    <div class="row">

        <form action="{{route('admin.alunos.salvar')}}">
            {{csrf_field()}}

            @include('admin.alunos._form')

            <button class="btn deep-orange">Salvar</button>

        </form>

    </div>
    </div>


@endsection
