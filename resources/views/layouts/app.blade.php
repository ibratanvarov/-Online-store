<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Интернет Магазин: @yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('main.index')}}">Интернет Магазин</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{route('main.index')}}">Все товары</a></li>
                <li ><a href="{{route('main.categories')}}">Категории</a>
                </li>
                <li ><a href="{{route('main.basket')}}">В корзину</a></li>
                <li><a href="{{route('main.index')}}">Сбросить проект в начальное состояние</a></li>
                <li><a href="http://internet-shop.tmweb.ru/locale/en">en</a></li>

{{--            <ul class="nav navbar-nav navbar-right">--}}
{{--                <li><a href="http://internet-shop.tmweb.ru/login">Панель администратора </a></li>--}}

{{--            </ul>--}}
        </div>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>
</body>
</html>
