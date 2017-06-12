@extends('layouts.master')

@section('content')
    <div class="container">
        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Bem vindo a Gráfica Rápida - Casa das Cópias
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i>Comunicação Visual</h4>
                    </div>
                    <div class="panel-body">
                        <img alt="Comunicação Visual" src="imagens/cv.jpg"
                             class="img-responsive img-thumbnail img-portfolio">
                        <h4>Comunicação Visual é toda forma de comunicação que utiliza de elementos visuais, tais como
                            imagens, signos, gráficos, vídeos ou desenhos para expressar uma ou mais ideias.</h4>
                        <a href="galerias/album" class="btn btn-primary">Saiba mais</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i>Impressão Digital</h4>
                    </div>
                    <div class="panel-body">
                        <img alt="Impressão Digital" src="imagens/imdi.jpg"
                             class="img-responsive img-thumbnail img-portfolio">
                        <h4>Impressão digital é um método de impressão no qual a imagem é gerada partir da entrada de
                            dados
                            digitais direto do computador para a impressora de produção.</h4>
                        <a href="galerias/album.php" class="btn btn-primary">Saiba mais</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i>Impressão Offset</h4>
                    </div>
                    <div class="panel-body">
                        <img alt="Impressão Offset" src="imagens/io.jpg"
                             class="img-responsive img-thumbnail img-portfolio">
                        <h4>Uma das formas mais utilizadas para impressão é o sistema offset. Utilizado para impressões
                            de
                            grande e média quantidade, o offset oferece uma boa qualidade e é feito com grande
                            rapidez.</h4>
                        <a href="galerias/album.php" class="btn btn-primary">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
@stop