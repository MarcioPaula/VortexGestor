@extends('template.site')

@section('titulo','Pagina Inicial')

@section('conteudo')

    <div class="container">
        <h3 class="center">Treinos</h3>
        <div class="row">
                @foreach($treinos as $treino)


                    <div class="col s12 m4">
                        <div class="card">
                                <span class="card-title">{{ $treino->treino}}</span>
                            <div class="card-content">
                                <p>{{$treino->descricao}}</p>
                            </div>
                            <div class="card-action">
                                <a href="{{route('admin.treinos.download',$treino->arquivo)}}">Baixar Treino</a>
                            </div>
                        </div>
                    </div>
            @endforeach
                </div>
        </div>
    </div>


@endsection
