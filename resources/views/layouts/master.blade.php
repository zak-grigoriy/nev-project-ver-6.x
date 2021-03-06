<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Интернет Магазин:@yield('title') </title>
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand"  href="{{route('index')}}">Интернет объявления</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a  href="{{route('index')}}">Все объявления</a></li>
          <li><a  href="{{route('categories')}}">Категории объявлений</a></li>
        </ul>
      @guest
        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Панель администратора</a></li>
      @endguest

      @auth
        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item drodown">
           <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{route('home')}}">Панель администратора</a></li>
          <li class="nav-item drodown">
           <a class="dropdown-item" href="{{route('logout')}}" onclick=".preventDefault();
            document.detElementById('logout-form').submit();">Выйти</a>
        </ul>
      @endauth
        </div>
      </div>
    </nav>
    <div class="container">
    @yield('content')
    </div>
  </body>
</html>
