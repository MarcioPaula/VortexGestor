@extends('template.site')

@section('titulo','Login')

@section('conteudo')

    <div class="container">
        <h3 class="center">Login</h3>
        <div class="row">

            <form method="post" action="{{route('site.login.entrar')}}">
                {{csrf_field()}}

                <div class="input-field">
                    <input type="text" required autocomplete="off" name="email" >
                    <label>Email</label>
                </div>

                <div class="input-field">
                    <input type="password" required autocomplete="off" name="senha" >
                    <label>Senha</label>
                </div>

                <button class="btn deep-orange">Logar</button>

            </form>

        </div>
    </div>


@endsection
