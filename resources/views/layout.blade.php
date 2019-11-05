<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="/css/app.css">
</head>
<body>
  <header>
    <nav class="navbar navbar-dark bg-dark">
      <div class="container">
        <div class="row">
          <a href="{{ route('home') }}" class="navbar-brand">ToDo App</a>
        </div>
      </div>
    </nav>
  </header>
  <main>
    @yield('content')
</body>
</html>
