@extends('layout.app')
@section('content')
{{-- 会員情報編集画面 --}}
<h1>会員情報編集</h1>
<form  action="{{route('users.update',9)}}>{{--{{route('users.update',$users)}}" method="POST">
    @method('put')--}}
    @csrf
    <div class="mb-3">
        <label for="disabledSelect" class="form-label">会員種別</label>
        <select id="disabledSelect" class="form-select">
          <option>一般会員</option>
          <option>店舗</option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">名前</label>
        <input type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">住所</label>
        <input type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">電話番号</label>
        <input type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">年齢</label>
        <input type="text" class="form-control">
    </div>
    <div class="mb-3">
      <label class="form-label">メールアドレス</label>
      <input type="email" class="form-control" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">パスワード</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-success">更新</button>
</form>
@endsection