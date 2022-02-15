<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Админка:@yield('title') </title>
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand"  href="{{route('index')}}">Вернуться на сайт</a>
      </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li ><a href="{{route('categories.index')}}">Категории объявлений</a></li>
        <li ><a href="{{route('products.index')}}">Объявления</a></li>
      </ul>
      @guest
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Войти</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">Зарегистрироваться</a>
        </li>
      </ul>
       @endguest

        @auth
          <ul class="nav navbar-nav navbar-right">
            <li class="nav-item drodown">
             <a id="navbarDropdown" class="nav-link dropdown-toggle"
             href="{{route('home')}}" role="button"
             data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false" v-pre>
             Личная страница
             </a>
             </li>
             <li class="nav-item drodown">
             <a class="dropdown-item" href="{{route('logout')}}"
             onclick=".preventDefault();
             document.detElementById('logout-form').submit();">
             Выйти
             </a>
             <form id="logout-form" action="{{route('logout')}}" method="POST"
               style="display: none;">
               @csrf
             </form>
             </li>
           </ul>
            @endauth
       </div>


        </div>
    </div>
</div>
</nav>
<div class="container">
  @yield('content')
</div>
</div>                           
  </body>
</html>
