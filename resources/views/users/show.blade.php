@extends('layout.app')
@section('content')
{{-- サイト管理ユーザーの場合　会員詳細画面 --}}
{{-- 店の管理ユーザー、会員ユーザーの場合　プロフィール --}}

<div class="mx-auto" style="width: 500px;">

<br>
<h3>会員情報</h3>
<br>

<div class="input-group mb-3 row justify-content-center">
  <img src="{{asset('images/no_user_image.png')}}" class="rounded-circle"   alt="" style="width: 100px;">
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">項目</th>
        <th scope="col">登録されている情報</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">会員種別</th>
        <td>一般会員 or 店舗</td>
      </tr>
      <tr>
        <th scope="row">会員ID</th>
        <td></td>
      </tr>
      <tr>
        <th scope="row">名前</th>
        <td></td>
      </tr>
      <tr>
        <th scope="row">生年月日</th>
        <td></td>
      </tr>
      <tr>
        <th scope="row">住所</th>
        <td></td>
      </tr>
      <tr>
        <th scope="row">電話番号</th>
        <td></td>
      </tr>
      <tr>
        <th scope="row">メールアドレス</th>
        <td></td>
      </tr>
    </tbody>
</table>

{{--新田さんがつくってくれたやつ 
  <form action="">
    <button type="button" class="btn btn-success">編集する</button>
</form>

<br><br>
<button type="button" class="btn btn-danger">退会する</button> --}}


  <button type="button" class="btn btn-success">編集する</button>
  <button type="button" class="btn btn-danger ">退会する</button>


  
@endsection