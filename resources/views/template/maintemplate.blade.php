<!DOCTYPE html>
<html lang="pt-Br">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>{{$titulo or "Sistema de Controle de Equipamentos"}}</title>

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="{{url('/assets/css/bootstrap.min.css')}}">

        <link rel="stylesheet" href="{{url('/assets/css/bootstrap-theme.min.css')}}">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{url('/assets/css/logo-nav.css')}}">

    </head>

    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="{{url('/assets/imgs/1linha150X50.png')}}" alt="">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->

                <ul class="nav nav-pills">
                    ...
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            Cadastros <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <a href="#">Usuários</a>
                        </ul>
                        <ul class="dropdown-menu">
                            <a href="#">Responsáveis</a>
                        </ul>
                        <ul class="dropdown-menu">
                            <a href="#">Setores</a>
                        </ul>
                        <ul class="dropdown-menu">
                            <a href="#">Tipos de Equipamentos</a>
                        </ul>
                        <ul class="dropdown-menu">
                            <a href="#">Tipos de Movimento</a>
                        </ul>
                        <ul class="dropdown-menu">
                            <a href="#">Equipamentos</a>
                        </ul>

                    </li>
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            Movimentações <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <a href="#">Entrada</a>
                        </ul>
                        <ul class="dropdown-menu">
                            <a href="#">Devolução</a>
                        </ul>
                        <ul class="dropdown-menu">
                            <a href="#">Saída</a>
                        </ul>

                    </li>
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            Relatórios <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <a href="#">Status Equipamentos</a>
                        </ul>
                        <ul class="dropdown-menu">
                            <a href="#">Equipamentos por setor</a>
                        </ul>
                        <ul class="dropdown-menu">
                            <a href="#">Valor de equipamentos</a>
                        </ul>
                        <ul class="dropdown-menu">
                            <a href="#">Equipamentos por tipo</a>
                        </ul>

                    </li>
                    ...
                </ul>


                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        @yield('content')

        <!-- jQuery -->
        <script src="{{url('/assets/js/jquery-2.2.3.min.js')}}"></script>
        <script src="{{url('/assets/js/bootstrap.min.js')}}"></script>

    </body>

</html>