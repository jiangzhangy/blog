<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>医美博客 - @yield('title', '主页') - 一个让自己更美的地方</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>

  @include('layouts._header')

  <div class="container">
    <div class="offset-md-1 col-md-10">
      @include('shared._messages')
      @yield('content')
      @include('layouts._footer')
    </div>
  </div>
</body>
</html>
