@extends('layout.app')
@section('content')
<div class="container content create-user-container">
    <div class="row">
        <p class="my-4 text-center title">会員登録</p>
        <div class="col-6 offset-3">
            <div class="mb-3 row justify-content-center">
                <label for="user-image">画像を選択してください</label>
                <img src="{{asset('images/users/no_user_image.png')}}" class="rounded-circle" alt="user-image">
            </div>
            <div class="input-group mb-3 mt-4 row">
                <span class="input-group-text col-4" id="name">名前</span>
                <input type="text" class="form-control col-8" placeholder="猿飛アスマ" aria-label="name" aria-describedby="name">
            </div>
            <div class="input-group mb-3 row">
                <span class="input-group-text col-4" id="birthday">生年月日</span>
                <input type="date" class="form-control col-8" aria-label="birthday" aria-describedby="birthday">
            </div>
            <div class="input-group mb-3 row">
                <span class="input-group-text col-4" id="addess">住所</span>
                <input type="text" class="form-control col-8" placeholder="東京都新宿区" aria-label="addess" aria-describedby="addess">
            </div>
            <div class="input-group mb-3 row">
                <span class="input-group-text col-4" id="phone">電話番号</span>
                <input type="text" class="form-control col-8" placeholder="1234-5678" aria-label="phone" aria-describedby="phone">
            </div>
            <div class="input-group mb-3 row">
                <span class="input-group-text col-4" id="email">Eメールアドレス</span>
                <input type="text" class="form-control col-8" placeholder="abcde@example.jp" aria-label="email" aria-describedby="email">
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
            <button class="btn btn-outline-primary w-100" type="button">新規登録</button>
        </div>
    </div>
</div>
@endsection





