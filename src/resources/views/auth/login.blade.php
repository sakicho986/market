<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ログインページ</title>
  <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
</head>

<body>
    <header class="header">
      <div class="header__inner">
        <div class="header-ttl">
          <a href="/">
            <img src="free-market-app/logo.svg" alt="coachtech">
          </a>
      </div>
    </header>
    <div class="register-form">
      <h2 class="register-form__heading">ログイン</h2>
      <div class="register-form__inner">
        <form class="register-form__form" action="/register" method="post">
           @csrf
          <div class="register-form__group">
            <label class="register-form__label" for="email">メールアドレス</label>
            <input class="register-form__input" type="mail" name="email" id="email">
            <p class="register-form__error-message">
              @error('email')
              {{ $message }}
              @enderror
            </p>
          </div>
          <div class="register-form__group">
            <label class="register-form__label" for="password">パスワード</label>
            <input class="register-form__input" type="password" name="password" id="password">
            <p class="register-form__error-message">
              @error('password')
              {{ $message }}
              @enderror
            </p>
          </div>
          <input class="register-form__btn btn" type="submit" value="ログインする">
          <div class="register-form__login">
            <a href="/register">会員登録はこちら</a></div>
        </form>
      </div>
    </div>
</body>

</html>