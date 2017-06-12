<html>
<style>
    body {
        padding-top: 65px;
    }
</style>

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href=" {{ asset('css/bootstrap.min.css') }} ">

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
</body>
</html>