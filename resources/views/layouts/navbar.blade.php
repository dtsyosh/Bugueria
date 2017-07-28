<html lang="pt-br">

<head>

    <title>Bugueria</title>






    <link href="css/bootstrap.min.css" rel="stylesheet">


    <link href="css/modern-business.css" rel="stylesheet">


    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <link href="lightbox/css/lightbox.min.css" rel="stylesheet">



</head>

<body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="banner">
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Bugueria Master</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href=" ">Empresa</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Serviços<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{url('/cardapio')}}">Cardápio</a>
                            </li>

                            <li>
                                <a href="{{url('/monte-sua-pizza')}}">Monte sua Pizza</a>
                            </li>

                            <li>
                                <a href="">Sobremesas</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                      <a href="/login">Área ADM</a>
                    </li>
                    @if(Auth::check())
                      <li><a href="/logout">Sair</a></li>
                    @endif
                </ul>
            </div>


        </div>

    </div>
	</body>
	</html>
