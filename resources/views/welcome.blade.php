<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md" style="font-size: 50px">
                    Dara Nasywa <br>
                    (5026201074)
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Tugas 1</a>
                    <a href="tugas2.html">Tugas 2</a>
                    <a href="tugas3.html">Tugas 3</a>
                    <a href="https://blog.laravel.com">Praktikum 1</a>
                    <a href="https://nova.laravel.com">Tugas 4</a>
                    <a href="https://nova.laravel.com">Praktikum 2</a>
                    <a href="ETS">ETS</a>
                    <a href="https://github.com/laravel/laravel">Tugas PHP</a>
                </div>
            </div>
        </div>
    </body>
</html>
{{-- function showForm()
    {
        //code untuk meload data yg akan dimuat di form
        return view('showgreetings');
    }

    function resultGreetings()
    {
        //code untuk meload data yg akan dimuat di form
        return view('tugas');
    } --}}
