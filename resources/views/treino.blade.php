@extends('template.site')

@section('titulo','Pagina Inicial')

@section('cabeçalho','Inicio')

@section('conteudo')

<div class="container">
    <br><br>
    <div class="row">

            <div class="col s12 m4">
                <div class="card blue-grey darken-1">
                    <span class="card-title white-text ">{{ $treino->treino}}</span>
                    <div class="card-content  white-text">
                        <p>{{$treino->descricao}}</p>
                    </div>
                    <div class="card-action">
                        <a href="{{route('admin.treinos.download',$treino->arquivo)}}" class="btn-floating halfway-fab waves-effect waves-light blue"><i class="material-icons">download</i></a>

                    </div>
                </div>
            </div>
    </div>
</div>
</div>

@endsection


