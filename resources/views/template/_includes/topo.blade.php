<!DOCTYPE html>
<html>
<head>
    <title>@yield('titulo')</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!--JavaScript at end of body for optimized loading-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<header>
    <nav>
        <div class="nav-wrapper blue lighten-2">
            <a href="#!" class="brand-logo">Vortex Gestor</a>
            <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="/">Pagina inicial</a></li>
                <li><a href="{{route('admin.alunos')}}">Alunos</a></li>
                <li><a href="{{route('admin.treinos')}}">Treinos</a></li>

            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile">
        <li><a href="/">Pagina inicial</a>
        <li><a href="{{route('admin.alunos')}}">Alunos</a></li>
        <li><a href="{{route('admin.treinos')}}">Treinos</a></li>
    </ul>
</header>
<body>
