@extends('layout.app')
@section('content')
{{-- ここに書いてね～ --}}
<p class="h3 mt-4">会員一覧</p>
<table class="table table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">会員ID</th>
      <th scope="col">名前</th>
      <th scope="col">生年月日</th>
      <th scope="col">住所</th>
      <th scope="col">電話番号</th>
      <th scope="col">Eメールアドレス</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>
        <img src="{{asset('images/user1.png')}}" class="rounded-circle" alt="..." style="height: 23px; width: 23px;">
        <span class="mx-2">猿飛アスマ</span> 
      </td>
      <td>1983/10/18</td>
      <td>東京都新宿区</td>
      <td>1234-5678</td>
      <td>asuma@sarutobi.jp</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>
        <img src="{{asset('...')}}" class="rounded-circle" alt="..." style="height: 23px; width: 23px;">
        <span class="mx-2">鈴木</span> 
      </td>
      <td>2021/05/21</td>
      <td>東京都新宿区</td>
      <td>1111-2222</td>
      <td>suzuki@example.com</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>
        <img src="{{asset('...')}}" class="rounded-circle" alt="..." style="height: 23px; width: 23px;">
        <span class="mx-2">山田</span> 
      </td>
      <td>2000/12/25</td>
      <td>東京都千代田区</td>
      <td>7777-7777</td>
      <td>yamada@test.co.jp</td>
    </tr>
  </tbody>
</table>

@endsection