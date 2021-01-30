<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1024">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="wrap">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color:white;">
            <div class="container">
            <div class="collapse navbar-collapse ">
                <ul class="navbar-nav mr-auto ">　
                <a class="navbar-brand" href="{{ url('/') }}">
                    <h3>{{ config('app.name', 'Laravel') }}</h3>
                </a>
                </ul>
                </div>
                <div class="collapse navbar-collapse justify-content-end">
            　　<ul class="navbar-nav">
                <li class="nav-item dropdown h6">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        管理者メニュー
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{url('ask/create')}}">ユーザー登録</a>
                        <a class="dropdown-item" href="{{url('ask/show_edit')}}">ユーザー情報編集</a>
                    </div>
                </li>
                </ul>
                </div>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
