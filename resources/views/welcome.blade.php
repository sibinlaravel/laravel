<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            .center {
                text-align: center;
                margin-top: 20%;
            }
        </style>
    </head>
    <body class="center">


       <a href="{{route('login')}}"> <button> Login </button> </a>
       <br><br>
       <a href="{{url('/register')}}"> <button> Register</button> </a>

    </body>
</html>
