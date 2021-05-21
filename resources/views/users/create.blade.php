@extends('layout.app')
@section('content')
{{-- ここに書いてね～ --}}

<div class="mx-auto" style="width: 500px;">

<p class="h3 mt-4">会員登録</p>
<div class="input-group mb-3 row justify-content-center">
  <label for="">画像を選択してください</label>
  <img src="{{asset('images/no_user_image.png')}}" class="rounded-circle"   alt="" style="width: 100px;">
</div>

<div class="input-group mb-3 mt-4 row">
  <span class="input-group-text col-4" id="basic-addon1">名前</span>
  <input type="text" class="form-control col-8" placeholder="猿飛アスマ" aria-label="Username" aria-describedby="basic-addon1">
</div>


<div class="input-group mb-3 row">
  <span class="input-group-text col-4" id="basic-addon1">生年月日</span>
  <input type="text" class="form-control col-8" placeholder="1983/10/18" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3 row">
  <span class="input-group-text col-4" id="basic-addon1">住所</span>
  <input type="text" class="form-control col-8" placeholder="東京都新宿区" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3 row">
  <span class="input-group-text col-4" id="basic-addon1">電話番号</span>
  <input type="text" class="form-control col-8" placeholder="1234-5678" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3 row">
  <span class="input-group-text col-4" id="basic-addon1">Eメールアドレス</span>
  <input type="text" class="form-control col-8" placeholder="abcde@example.jp" aria-label="Username" aria-describedby="basic-addon1">
</div>


<div class="input-group mb-3 row">
  <span class="input-group-text col-4" id="basic-addon1">パスワード</span>
  <input type="text" class="form-control col-8" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="d-grid gap-2 col-6 mx-auto mt-4">
  <button class="btn btn-primary" type="button">新規登録</button>
</div>

</div>
@endsection