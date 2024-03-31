<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
  @yield('css')
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <div class="header-ttl">
        <a href="/">
          <img src="free-market-app/logo.svg" alt="coachtech">
        </a>
      </div>
      <nav class="header-nav">
        <ul class="header-nav-list">
          <li class="header-nav-item"><a href="/login">ログイン</a></li>
          <li class="header-nav-item"><a href="/register">会員登録</a></li>
          <li class="header-nav-item"><a href="/sell">出品</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    @yield('content')
  </main>
</body>

</html>