@extends('layouts.master')

@section('content')

<div class="container">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="imagens/caro11.jpg" alt="pizza" style="width:100%;">
      </div>

      <div class="item">
        <img src="imagens/caro12.jpg" alt="pizza" style="width:100%;">
      </div>
    
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>


    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Bem vindos ao site Bugueria!
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i>Cardápio</h4>
                    </div>
                    <div class="panel-body">
                    	<img alt="Cardapio" src="imagens/cardapio.jpg" class="img-responsive img-thumbnail img-portfolio img-circle">
                        <h4>Venha conferir nosso amplo cardápio entre as mais diversas pizzas, encontre a sua aqui.</h4>
                        <a href="{{url('/cardapio')}}" class="btn btn-primary" role="button " >clique aqui</a>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i>Monte sua Pizza</h4>
                    </div>
                    <div class="panel-body">
                    	<img alt="monte sua pizza" src="imagens/pizza.png" class="img-responsive img-thumbnail img-portfolio img-circle">
                        <h4>Tenha opção também de montar a sua pizza a gosto, com ingredientes que estão em sua boca</h4>
                        <a href="{{ url('/monte-sua-pizza') }}" class="btn btn-primary center" role="button">Clique aqui</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i>Sobremesas</h4>
                    </div>
                    <div class="panel-body">                    	
                    	<img alt="sobremesa" src="imagens/sobre.jpg" class="img-responsive img-thumbnail img-portfolio img-circle">
                        <h4>Delicie-se de uma bela sobremesa depois de comer uma pizza, temos variaveis tipos de sobremesas.</h4>
                        <a href=" #" class="btn btn-primary">Clique aqui</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->


        <!-- Portfólio-->
        <div class="row">
            <div class="col-lg-12">
                





            </div>
        </div>
        <!-- /.row -->


        <hr>


    </div>
       
       

     <!-- Script Carousel --> 
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
    
    <!-- Scrit Lightbox -->
    <script>
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    })
</script>

</body>

</html>
@stop
