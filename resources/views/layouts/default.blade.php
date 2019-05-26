<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>医美博客 - @yield('title', '主页') - 一个让自己更美的地方</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/">医美博客</a>
      <ul class="navbar-nav justify-content-end">
        <li class="nav-item"><a href="" class="nav-link" href="/help">帮助</a></li>
        <li class="nav-item"><a href="" class="nav-link" href="#">登录</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">
   @yield('content')
  </div>
</body>
</html>
