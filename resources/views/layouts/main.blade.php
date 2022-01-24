<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonte do Google -->
            <link href="https: //fonts.googleapis.com/css2? family= Roboto & display=swap" rel="stylesheet">

            <!-- CSS Bootstrap -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


        <!-- CSS da aplicação -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>


    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/Logo.png" alt="Logo.png">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/noticias/forum" class="nav-link">Noticias</a>
                        </li>
                        <li class="nav-item">
                            <a href="/contatos/contact" class="nav-link">Sobre Nós</a>
                        </li>

                        <li class="nav-item">
                            <a href="/reportBugs/create" class="nav-link">Reporte bug</a>
                        </li>

                        @auth
                        <li class="nav-item">
                            <form action="/logout" method="POST">
                                @csrf
                                <a href="logout"
                                class="nav-link"
                                onclick="event.preventDefault();
                                            this.closest('form').submit(); ">
                                    Sair</a>
                            </form>
                        </li>
                        @endauth

                        @guest
                        <li class="nav-item">
                            <a href="/login" class="nav-link">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/register" class="nav-link">Cadastrar</a>
                        </li>
                        @endguest

                </div>
            </nav>
        </header>
        @yield('content')
    <footer>

        <footer class="container-fluid text-center foot">

        <div class="copyrights">
            <p class="white-txt">Game Dev © 2022
                <br><br>

            </p>
            <hr class="dark-line">
            <a class="link" href="#">Sobre Nós</a>&nbsp
            <a class="link" href="#">Política de Privacidade</a>&nbsp
            <a class="link" href="#">Termos & Condições</a>
            <br><br>
            <p class="white-txt small">
                FAQ: contact@gamedev.com / Cx. Postal: mail@gamedev.com / Fone: 0800-777-0000
            </p>
        </div>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</footer>
    </footer>
    </body>
</html>
