<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fun-Facts Counter</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body class="bg-muted">
        <div class="container h-100 d-flex justify-content-center">
            <div class="col-8 text-center my-auto">
                <h3>{{$welcomeMsg}}</h3>
                <h1>{{$countMsg}}</h1>
                <h4>{{$factMsg}}</h4>
            </div>
        </div>
    </body>
</html>
