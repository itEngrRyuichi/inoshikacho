@extends('layout.app')
@section('content')
{{-- ここに書いてね～ --}}

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">会員番号</th>
      <th scope="col">名前</th>
      <th scope="col">年齢</th>
      <th scope="col">Eメールアドレス</th>
      <th scope="col">電話番号</th>
      <th scope="col">住所</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>山田</td>
      <td>22</td>
      <td>Laravel@co.jp</td>
      <td>1234-5678</td>
      <td>東京都新宿区</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>鈴木</td>
      <td>22</td>
      <td>abcdefg@co.jp</td>
      <td>1111-2222</td>
      <td>東京都新宿区</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>

<div class="d-grid gap-2 col-6 mx-auto">
  <button class="btn btn-primary" type="button">新規登録</button>
</div>
@endsection