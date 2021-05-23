@extends('layout.app')

@section('content')
<div class="container content create-store-container">
    <form class="row">
        <p class="py-4 text-center title">店舗編集</p>
        <div class="col-6">
            <div class="input-group mb-3 row">
                <span class="input-group-text col-3" id="name">店舗名</span>
                <input type="text" class="form-control col-9" aria-label="name" aria-describedby="name" value="アスマホテル">
            </div>
            <div class="mb-3 row">
                <div class="col-6">
                    <div class="input-group row">
                        <span class="input-group-text col-5" id="name">エリア選択</span>
                        <select name="area" id="area" class="form-select col-6">
                            <option value="1">北海道</option>
                            <option value="2">東北</option>
                            <option value="3">北関東</option>
                            <option value="4">首都圏</option>
                            <option value="5" selected>甲信越</option>
                            <option value="6">東海</option>
                            <option value="7">伊豆・箱根</option>
                            <option value="8">北陸</option>
                            <option value="9">近畿</option>
                            <option value="10">四国</option>
                            <option value="11">山陽・山陰</option>
                            <option value="12">九州</option>
                            <option value="13">沖縄</option>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group row">
                        <span class="input-group-text col-5" id="storetype">店舗種類</span>
                        <select name="area" id="storetype" class="form-select col-7">
                            <option value="1">シティーホテル</option>
                            <option value="2" selected>リゾートホテル</option>
                            <option value="3">ビジネスホテル</option>
                            <option value="4">旅館</option>
                            <option value="5">民宿</option>
                            <option value="6">ペンション</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="mb-3 row px-0">
                <div class="col-8 px-0">
                    <label for="main-store-pic">メイン写真</label>
                    <img src="{{ asset('images/stores/hotel1.jpg') }}" alt="main-store-pic" class="main-store-pic">
                </div>
                <div class="col-4 pr-0">
                    <label for="sub1-store-pic">サブ写真1</label>
                    <img src="{{ asset('images/stores/hotel2.jpg') }}" alt="sub-store-pic" class="sub-store-pic">
                    <label for="sub2-store-pic">サブ写真2</label>
                    <img src="{{ asset('images/stores/hotel3.jpg') }}" alt="sub-store-pic" class="sub-store-pic">
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3 row">
                <div class="col-4">
                    <div class="input-group row">
                        <span class="input-group-text col-3" id="postal">〒</span>
                        <input type="text" class="form-control col-9" aria-label="postal" aria-describedby="postal" value="1234567">
                    </div>
                </div>
                <div class="col-8">
                    <div class="input-group row">
                        <span class="input-group-text col-3" id="phone">電話番号</span>
                        <input type="text" class="form-control col-9" value="123-4567-8912" aria-label="phone" aria-describedby="phone">
                    </div>
                </div>
            </div>
            <div class="input-group mb-3 row">
                <span class="input-group-text col-2" id="addess">住所</span>
                <input type="text" class="form-control col-10" value="静岡県伊東市岡1111-1" aria-label="addess" aria-describedby="addess">
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" id="accesss" style="height: 100px">静岡駅から徒歩5分</textarea>
                <label class="form-label" id="access">アクセス情報記入</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" id="description" style="height: 200px">ようそこアスマホテルへ</textarea>
                <label class="form-label" id="description">ホテル情報記入</label>
            </div>
        </div>
        <div class="col-2 offset-5 my-4">
            <button class="btn btn-outline-success w-100" type="submit">編集</button>
        </div>
    </div>

</div>

@endsection
