@extends('layout.app')
@section('content')
<div class="container content create-user-container">
    <form action="#" class="row">
        <p class="my-4 text-center title">会員情報の編集</p>
        <div class="col-6 offset-3">
            <div class="mb-3 row justify-content-center">
                <label for="user-image">画像を選択してください</label>
                <img src="{{asset('images/users/no_user_image.png')}}" class="rounded-circle" alt="user-image">
            </div>
            <div class="input-group mb-3 mt-4 row">
                <span class="input-group-text col-4" id="name">名前</span>
                <input type="text" class="form-control col-8" placeholder="猿飛アスマ" aria-label="name" aria-describedby="name" value="{{old('name', $user->name)}}">
            </div>
            <div class="input-group mb-3 row">
                <span class="input-group-text col-4" id="birthday">生年月日</span>
                <input type="date" class="form-control col-8" aria-label="birthday" aria-describedby="birthday" value="{{$user->birthday}}">
            </div>
            <div class="input-group mb-3 row">
                <span class="input-group-text col-4" id="address">住所</span>
                <input type="text" class="form-control col-8" placeholder="東京都新宿区" aria-label="address" aria-describedby="address" value="{{$user->address}}">
            </div>
            <div class="input-group mb-3 row">
                <span class="input-group-text col-4" id="phone">電話番号</span>
                <input type="text" class="form-control col-8" placeholder="1234-5678" aria-label="phone" aria-describedby="phone" value="{{$user->phone}}">
            </div>
            <div class="input-group mb-3 row">
                <span class="input-group-text col-4" id="email">Eメールアドレス</span>
                <input type="text" class="form-control col-8" placeholder="abcde@example.jp" aria-label="email" aria-describedby="email" value="{{$user->email}}">
            </div>
            <div class="input-group mb-3 row">
                <span class="input-group-text col-4" id="password">パスワード</span>
                <input type="password" class="form-control col-8" placeholder="小文字・大文字のアルファベットと数字を合わせて下さい" aria-label="password" aria-describedby="password">
            </div>
            <div class="input-group mb-3 row">
                <span class="input-group-text col-4" id="confirmpassword">パスワード確認</span>
                <input type="password" class="form-control col-8" placeholder="小文字・大文字のアルファベットと数字を合わせて下さい" aria-label="confirmpassword" aria-describedby="confirmpassword">
            </div>
        </div>
        <div class="col-2 offset-5 my-4">
            <button class="btn btn-outline-primary w-100" type="submit">登録する</button>
        </div>
    </form>
</div>
@endsection





