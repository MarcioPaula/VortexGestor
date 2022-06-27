@extends('template.site')

@section('titulo','Pagina Inicial')

@section('cabeçalho','Inicio')

@section('conteudo')



    <div class="container">
        <h3 class="center">Pesquisar treino</h3>
        <div class="row">

            <form method="post" action="{{route('admin.alunos.treino')}}">
                {{csrf_field()}}

                <div class="input-field">
                    <input type="text" required autocomplete="off" name="cpf">
                    <label>CPF</label>
                </div>
                <button class="btn deep-orange">Enviar</button>

            </form>

        </div>
    </div>

    @if(session('cpfinvalido')=='ativo')
        <script>
            M.toast({html: 'CPF não cadastrado',classes:'red'})
        </script>
        {{session(['cpfinvalido' => 'inativo'])}}
    @endif

    @if(session('treinonaocadastrado')=='ativo')
        <script>
            M.toast({html: 'Treino não cadastrado',classes:'red'})
        </script>
        {{session(['treinonaocadastrado' => 'inativo'])}}
    @endif

@endsection














