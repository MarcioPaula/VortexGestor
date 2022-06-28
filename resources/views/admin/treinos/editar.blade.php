@extends('template.site')

@section('titulo','Alunos')

@section('conteudo')

    <div class="container">
        <h3 class="center">Editar treino</h3>
    <div class="row">

        <form  action="{{route('admin.treinos.atualizar',$registro)}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}

            @include('admin.treinos._form')

            <button class="btn deep-orange">Salvar</button>

        </form>

    </div>
    </div>


@endsection
