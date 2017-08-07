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
        <script
                src="http://code.jquery.com/jquery-3.2.1.min.js"
                integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
                crossorigin="anonymous"></script>
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
