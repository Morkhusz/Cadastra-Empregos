<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="{{url(mix('css/app.css'))}}">
        <title>@yield('titulo')</title>
    </head>
    <body>
        <nav class="navbar navbar-light nav justify-content-between">
            <div class="container-sm">
                @auth
                <a href="{{route('nova')}}" class="btn btn-outline-danger">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg>
                Nova Vaga
            </a>
            @endauth

            @guest
            <span class="d-flex justify-content-center">
                </span>
                @endguest

                <span class="d-flex justify-content-center">
                    <img src="https://yt3.ggpht.com/a/AATXAJzZSHTcbAzidHC-SZKmXWBcWjQDELXMNcQdSX8c=s900-c-k-c0xffffffff-no-rj-mo" alt="voltar para pagina principal" class="slogan">
                </span>

                @guest
                <span class="d-flex justify-content-start">
                    <a href="{{route('login')}}" class="nav-link-a mr-3">Login</a>
                </span>
                @endguest

                @auth
                <span class="d-flex justify-content-start nav-item">
                    <p class="h5">Olá, <span class="texto-preto"> {{$user->name ?? ''}}!</span></p>
                    <a href="/login/logout" class="nav-link-a mr-3 ml-3">LogOut</a>
                </span>
                @endauth
            </div>
        </nav>

        <div class="cabecalho">
            <div class="container-sm">
                @yield('cabecalho')
            </div>
        </div>

        @yield('conteudo')

        <footer>
        <div class="card-footer  footer text-muted text-center">
            Desenvolvido por <span class="color-p">UOTZ</span>
        </div>
        </footer>
    </body>
    <script type="text/javascript" src="{{url(mix('js/scripts.js'))}}"></script>
</html>
