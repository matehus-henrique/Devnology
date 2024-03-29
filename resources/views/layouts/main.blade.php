<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonte do Google -->


        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CCS BOOTSTRAP -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/scripts.js"></script>

        <style>
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body >

        <header>
            <nav class=" navbar navbar-expand-lg navbar-light">

                <div class=" collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/logo.png" alt="">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Home</a>

                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Produtos</a>

                        </li>



                        @auth
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">Meus Produtos</a>

                        </li>
                        <li class="nav-item">
                            <a href="/events/create" class="nav-link">Adicionar produtos</a>

                        </li>
                        <li class="nav-item">
                            <form action="/logout" method="POST">
                                @csrf
                            <a href="/logout"
                             class="nav-link"
                              onclick="event.preventDefault();
                              this.closest('form').submit();">sair</a>
                            </form>
                        </li>
                        @endauth
                        @guest

                        <li class="nav-item">
                            <a href="/login" class="nav-link">Login</a>

                        </li>


                        <li class="nav-item">
                            <a href="/register" class="nav-link">Cadastrar</a>

                        </li>
                        @endguest
                    </ul>

                </div>

            </nav>
        </header>
        <main>
            <div class="container-fluid">
                <div class="row">

                    @if (session('msg'))
                    <p class="msg">{{session('msg')}}</p>

                    @endif

                    @yield('content')
                </div>

            </div>
        </main>
        <footer>

            <p>
                PS-FORÇA &copy; 2022
            </p>
        </footer>
        <!--Fontes para icons-->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
