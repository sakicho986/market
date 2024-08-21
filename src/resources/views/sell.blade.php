<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/sell.css') }}">
    @yield('css')
</head>

<body>
    <div class="sell">
        <div class="sell__heading">
            <h2>商品の出品</h2>
        </div>
        <form class="pic">
            <p>商品の画像</p>
            <div class="pic__upload">
                <form action="/my_page2" method="post" enctype='multipart/form-data'></form>
                {{ csrf_field() }}
                <!-- 画像内容 -->
            </div>
            <div>
                <input type="file" name="top_image">
            </div>
            <h2>商品の詳細</h2>
            <div class="sell-form">
                    <span class="sell--category">カテゴリー</span>
                    <div class="sell--category--text">
                        <input type="text" name="name"/>
                    </div>
                    <span class="sell--conditions">商品の状態</span>
                    <div class="sell--conditions--text">
                        <input type="text" name="name"/>
                    </div>
            </div>
            <h2>商品名と説明</h2>
                <div class="sell-content">
                    <span class="sell--name">商品名</span>
                    <div class="sell--text">
                        <input type="text" name="name"/>
                    </div>
                    <div class="form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
            <h2>販売価格</h2>
                <div class="sell-price">
                    <span class="sell--price--text">販売価格</span>
                    <div class="sell--price--details">
                        <input type="text" name="name"/>
                    </div>
                    <div class="form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">出品する</button>
                </div>
    </div>
</body>
