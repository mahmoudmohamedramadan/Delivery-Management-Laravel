<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Icon -->
    <link rel="icon" href="{{ asset('delivery-management.jfif') }}">

    <title>Welcome Page | Delivery Management</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #C5E1A5;
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

        .links>a {
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
                    <a href="{{ url('/index') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Delivery Management
            </div>

            <div class="links">
                <a href="https://www.facebook.com/mahmoud.ramadan.10690203"><img
                        src="https://img.shields.io/badge/Facebook-%234267B2?style=flat&logo=Facebook&logoColor=white" /></a>
                <a href="https://twitter.com/Mahmoud53953966a"><img
                        src="https://img.shields.io/badge/twitter-%231FA1F1?style=flat&logo=twitter&logoColor=white" /></a>
                <a href="https://www.instagram.com/mahmoud.m.ramadan.5"><img
                        src="https://img.shields.io/badge/Instagram-%23E1306C?style=flat&logo=Instagram&logoColor=white" /></a>
                <a href="https://www.linkedin.com/in/mahmoud-mohamed-ramadan-268b93188"><img
                        src="https://img.shields.io/badge/linkedin-%230177B5?style=flat&logo=linkedin&logoColor=white" /></a>
            </div>
        </div>
    </div>
</body>

</html>
