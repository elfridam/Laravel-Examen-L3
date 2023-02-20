<!DOCTYPE html>
<html>
<head>
    <title>Laravel - Examen</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);

        body{
            margin: 0;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left;
            background-color: #f5f8fa;
        }
        .navbar-laravel
        {
            box-shadow: 0 2px 4px rgba(0,0,0,.04);
        }
        .navbar-brand , .nav-link, .my-form, .login-form
        {
            font-family: Raleway, sans-serif;
        }
        .my-form
        {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        .my-form .row
        {
            margin-left: 0;
            margin-right: 0;
        }
        .login-form
        {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        .login-form .row
        {
            margin-left: 0;
            margin-right: 0;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light navbar-laravel" style="background-color: #fff">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="{{ asset('bib.png') }}" alt="" style="width: 50px; height: 50px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tranche-age">Graphe tranche d'age</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/candidats-par-sexe">Repartition par sexe</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/formation-par-referentiel">Nombre de formations par referentiel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/candidat-par-formation">Candidats par formation</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="/formation-par-type">Formations par type</a>
                </li> --}}

                @guest

                @else
                    <li class="nav-item">
                        <span class="nav-link"> Bienvenue {{ Auth::user()->prenom }} </span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Déconnexion</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
@yield('content')
</body>
</html>
