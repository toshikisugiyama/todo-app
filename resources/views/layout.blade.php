<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Todo App</title>
  @yield('styles')
  <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<header>
  <nav class="my-navbar">
    <a href="/" class="my-navbar-brand">ToDo App</a>
    <div class="my-navbar-control">
      @if(Auth::check())
        <span class="my-navbar-item">ようこそ、{{ Auth::user()->name }}さん</span>
        |
        <a href="#" id="logout" class="my-navbar-item">ログアウト</a>
        <form id="logout-form"  action="{{ route('logout') }}" method="post" style="desplay: none;"></form>
      @else
        <a class="my-navbar-item" href="{{ route('login') }}">ログイン</a>
        |
        <a class="my-navbar-item" href="{{ route('register') }}">会員登録</a>
      @endif
    </div>
  </nav>
</header>
<main>
  @yield('content')
</main>
@yield('scripts')
</body>
</html>
