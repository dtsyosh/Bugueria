<html>
    <style>
    body {
    padding-top: 65px;
    }
    input {
      background-color: rgba(202, 196, 196, 0.18);
    }
    </style>
    <head>

        <link rel="stylesheet" href=" {{ asset('css/bootstrap.min.css') }} ">
        <script src="js/app.js"></script>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Lightbox JavaScript -->
        <script src="lightbox/js/lightbox.min.js"></script>

        <title>@yield('title')</title>
    </head>
    <body>
        @include('layouts.navbar')
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>
                    </h1>
                </div>
            </div>
        </div>
        <div class="container">
            @yield('content')
        </div>
        @include('layouts.footer')
    </body>
</html>
