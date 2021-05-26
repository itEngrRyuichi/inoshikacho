@extends('layout.app')

@section('content')
<div class="container content create-store-container">
    <form class="row" action="{{ route('stores.update', $store->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <p class="py-4 text-center title">店舗編集</p>
        <div class="col-6">
            <div class="input-group mb-3 row">
                <span class="input-group-text col-3" id="name">店舗名</span>
                <input type="text" class="form-control col-9" name="store_name" value="{{$store->store_name}}">
            </div>
            <div class="mb-3 row">
                <div class="col-6">
                    <div class="input-group row">
                        <span class="input-group-text col-5">エリア選択</span>
                        <select name="area_id" id="area_id" class="form-select col-6">
                            @foreach ($areas as $area)
                            <option value="{{$area->id}}" {{ $area->id === $store->area_id ? 'selected' : ''}}>{{$area->area_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group row">
                        <span class="input-group-text col-5">店舗種類</span>
                        <select name="store_type_id" id="store_type_id" class="form-select col-7">
                            @foreach ($store_types as $store_type)
                            <option value="{{$store_type->id}}" {{ $store_type->id === $store->store_type_id ? 'selected' : ''}}>{{$store_type->store_type_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="mb-3 row px-0">
                <div class="col-8 px-0">
                    <label for="select-image" class="text1 text-center select-label">画像を選択してください <input type="file" id="select-image" multiple accept="image/*" class="d-none" name="select-image"></label>
                    <img src="{{ asset('storage/'.$images[0]->url) }}" alt="main-store-pic" class="main-store-pic" id="file-preview">
                </div>
                <div class="col-4 pr-0">
                    <label for="select-image1" class="text1 text-center select-label">画像を選択してください <input type="file" id="select-image1" multiple accept="image/*" class="d-none" name="select-image1"></label>
                    <img src="{{ asset('storage/'.$images[1]->url) }}" alt="sub1-store-pic" class="sub-store-pic" id="file-preview1">

                    <label for="select-image2" class="text1 text-center select-label">画像を選択してください <input type="file" id="select-image2" multiple accept="image/*" class="d-none" name="select-image2"></label>
                    <img src="{{ asset('storage/'.$images[2]->url) }}" alt="sub1-store-pic" class="sub-store-pic" id="file-preview2">
                </div>
                <script type="text/javascript">
                    document.getElementById('select-image').addEventListener('change', function (e) {
                        var file = e.target.files[0];
                        var blobUrl = window.URL.createObjectURL(file);
                        var img = document.getElementById('file-preview');
                        img.src = blobUrl;
                    });
                    document.getElementById('select-image1').addEventListener('change', function (e) {
                        var file = e.target.files[0];
                        var blobUrl = window.URL.createObjectURL(file);
                        var img = document.getElementById('file-preview1');
                        img.src = blobUrl;
                    });
                    document.getElementById('select-image2').addEventListener('change', function (e) {
                        var file = e.target.files[0];
                        var blobUrl = window.URL.createObjectURL(file);
                        var img = document.getElementById('file-preview2');
                        img.src = blobUrl;
                    });
                </script>
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3 row">
                <div class="col-4">
                    <div class="input-group row">
                        <span class="input-group-text col-3" id="postal">〒</span>
                        <input type="text" class="form-control col-9" placeholder="1234567" name="postal" value="{{$store->postal}}">
                    </div>
                </div>
                <div class="col-8">
                    <div class="input-group row">
                        <span class="input-group-text col-3" id="phone">電話番号</span>
                        <input type="text" class="form-control col-9" placeholder="123-4567-8912" name="phone" value="{{$store->phone}}">
                    </div>
                </div>
            </div>
            <div class="input-group mb-3 row">
                <span class="input-group-text col-2" id="address">住所</span>
                <input type="text" class="form-control col-10" placeholder="静岡県伊東市岡1111-1" name="address" value="{{$store->address}}">
            </div>
            <div class="input-group mb-3 row">
                <span class="input-group-text col-2" id="email">Email</span>
                <input type="email" class="form-control col-10" placeholder="example@example.com" name="email" value="{{$store->email}}">
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control access" id="accesss" placeholder="静岡駅から徒歩5分" name="access">{{$store->access}}</textarea>
                <label class="form-label" id="access">アクセス情報記入</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control description" id="description" placeholder="ようそこアスマホテルへ" name="description">{{$store->description}}</textarea>
                <label class="form-label" id="description">ホテル情報記入</label>
            </div>
        </div>
        <div class="col-2 offset-5 my-4">
            <button class="btn btn-outline-success w-100" type="submit">編集</button>
        </div>
    </div>

</div>

@endsection
