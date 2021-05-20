@extends('layout.app')
@section('content')
{{-- ここに書いてね～ --}}
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">名前</span>
  <input type="text" class="form-control" placeholder="猿飛アスマ" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">年齢</span>
  <input type="text" class="form-control" placeholder="22" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">住所</span>
  <input type="text" class="form-control" placeholder="東京都新宿区" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">電話番号</span>
  <input type="text" class="form-control" placeholder="1234-5678" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="abcde" aria-label="Username">
  <span class="input-group-text">@</span>
  <input type="text" class="form-control" placeholder="co.jp" aria-label="Server">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">パスワード</span>
  <input type="text" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="d-grid gap-2 col-6 mx-auto">
  <button class="btn btn-primary" type="button">新規登録</button>
</div>

@endsection