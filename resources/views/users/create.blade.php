@extends('layout.app')
@section('content')
<div class="container content create-user-container">
    @if ($pagetype =='create')
    <form action="{{ route('users.store')}}" method="post" class="row">
    @csrf
    @endif
    @if ($pagetype =='edit')
    <form action="{{ route('users.update', $user->id)}}" method="post" class="row">
    @csrf
    @method('put')
    @endif
        <p class="my-4 text-center title">{{$title}}</p>
        <div class="col-6 offset-3">
            <div class="mb-3 row justify-content-center">
                <label for="user-image">画像を選択してください</label>
                <img src="{{asset('images/users/no_user_image.png')}}" class="rounded-circle" alt="user-image">
            </div>
            <div class="input-group mb-3 mt-4 row">
                <span class="input-group-text col-4" id="name">名前</span>
                <input type="text" class="form-control col-8" placeholder="猿飛アスマ" name="name" value="{{old('name', $user->name)}}" required>
            </div>
            @if ($pagetype =='create')
            <input type="hidden" name="type" value="3" required>
            @endif
            @if ($pagetype =='edit')
            <input type="hidden" name="type" value="{{$user->type}}" required> 
            @endif
            <input type="hidden" name="type" value="{{$user->type}}" required>
            <div class="input-group mb-3 row">
                <span class="input-group-text col-4" id="birthday">生年月日</span>
                <input type="date" class="form-control col-8" name="birthday" value="{{$user->birthday}}" required>
            </div>
            <div class="input-group mb-3 row">
                <span class="input-group-text col-4" id="address">住所</span>
                <input type="text" class="form-control col-8" placeholder="東京都新宿区" name="address" value="{{$user->address}}" required>
            </div>
            <div class="input-group mb-3 row">
                <span class="input-group-text col-4" id="phone">電話番号</span>
                <input type="text" class="form-control col-8" placeholder="1234-5678" name="phone" value="{{$user->phone}}" required>
            </div>
            <div class="input-group mb-3 row">
                <span class="input-group-text col-4" id="email">Eメールアドレス</span>
                <input type="text" class="form-control col-8" placeholder="abcde@example.jp" name="email" value="{{$user->email}}" required>
            </div>
            <div class="input-group mb-3 row">
                <span class="input-group-text col-4" id="password">パスワード</span>
                <input type="password" class="form-control col-8" placeholder="小文字・大文字のアルファベットと数字を合わせて下さい" name="password" value="{{$user->password}}" required>
            </div>
            <div class="input-group mb-3 row">
                <span class="input-group-text col-4" id="confirmpassword">パスワード確認</span>
                <input type="password" class="form-control col-8" placeholder="小文字・大文字のアルファベットと数字を合わせて下さい" required>
            </div>
        </div>
        <div class="col-2 offset-5 my-4">
            @if ($pagetype =='create')
            <button class="btn btn-outline-primary w-100" type="submit">新規登録</button>
            @endif
            @if ($pagetype =='edit')
            <button class="btn btn-outline-success w-100" type="submit">編集する</button>  
            @endif
        </div>
    </form>
</div>
@endsection





