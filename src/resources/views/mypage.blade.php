@extends('layouts.app')

@section('title',  'マイページ')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
<div class="mypage__content">
  <div class="mypage__user">
      <p class="mypage__user--name">ユーザー名</P>
       
  </div>
  <div class="mypage__container">
    <div class="mypage__container--recommend">
      出品した商品
    </div>
    <div class="mypage__container--list">
      購入した商品
    </div>
  </div>
  <div class="mypage__layout">
    <hr class="mypage__layout--line" width="100%">
  </div>
  <div class="mypage__wrapper">
    <div class="mypage__wrapper--post"></div>
    <div class="mypage__wrapper--post"></div>
    <div class="mypage__wrapper--post"></div>
    <div class="mypage__wrapper--post"></div>
    <div class="mypage__wrapper--post"></div>
  </div>
  <div class="mypage__wrapper1">
    <div class="mypage__wrapper--post1"></div>
    <div class="mypage__wrapper--post1"></div>
    <div class="mypage__wrapper--post1"></div>
    <div class="mypage__wrapper--post1"></div>
    <div class="mypage__wrapper--post1"></div>
  </div>
</div>
@endsection