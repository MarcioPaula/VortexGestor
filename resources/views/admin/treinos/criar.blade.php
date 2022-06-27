@extends('template.site')

@section('titulo','Treinos')

@section('conteudo')

    <div class="container">
        <h3 class="center">Adicionar treino</h3>
    <div class="row">

        <form  action="{{route('admin.treinos.salvar')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}

            @include('admin.treinos._form')

            <button class="btn deep-orange">Salvar</button>

        </form>

    </div>
    </div>


@endsection
