@extends('layout.app')

@section('content')
<div class="container content create-store-container">
    <form class="row" action ="{{route('stores.update', $store->id)}}" method="post">
        @csrf
        @method('put')
        <p class="py-4 text-center title">店舗編集</p>
        <div class="col-6">
            <div class="input-group mb-3 row">
                <span class="input-group-text col-3" id="store_name">店舗名</span>
                <input type="text" class="form-control col-9" name="store_name"  value="{{$store->store_name}}" required>
            </div>
            <div class="mb-3 row">
                <div class="col-6">
                    <div class="input-group row">
                        <span class="input-group-text col-5" id="name">エリア選択</span>
                        <select name="area_id" id="area" class="form-select col-6">
                            <option value="1" {{$store->area->name == '北海道' ? 'selected' : ''}}>北海道</option>
                            <option value="2" {{$store->area->name == '東北' ? 'selected' : ''}}>東北</option>
                            <option value="3" {{$store->area->name == '北関東' ? 'selected' : ''}}>北関東</option>
                            <option value="4" {{$store->area->name == '首都圏' ? 'selected' : ''}}>首都圏</option>
                            <option value="5" {{$store->area->name == '甲信越' ? 'selected' : ''}}>甲信越</option>
                            <option value="6" {{$store->area->name == '東海' ? 'selected' : ''}}>東海</option>
                            <option value="7" {{$store->area->name == '伊豆・箱根' ? 'selected' : ''}}>伊豆・箱根</option>
                            <option value="8" {{$store->area->name == '北陸' ? 'selected' : ''}}>北陸</option>
                            <option value="9" {{$store->area->name == '近畿' ? 'selected' : ''}}>近畿</option>
                            <option value="10" {{$store->area->name == '四国' ? 'selected' : ''}}>四国</option>
                            <option value="11" {{$store->area->name == '山陽・山陰' ? 'selected' : ''}}>山陽・山陰</option>
                            <option value="12" {{$store->area->name == '九州' ? 'selected' : ''}}>九州</option>
                            <option value="13" {{$store->area->name == '沖縄' ? 'selected' : ''}}>沖縄</option>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group row">
                        <span class="input-group-text col-5" id="storetype">店舗種類</span>
                        <select name="store_type_id" id="store_type_id" class="form-select col-7">
                            <option value="1" {{$store->storeType->name == 'シティホール' ? 'selected' : ''}}>シティーホテル</option>
                            <option value="2" {{$store->storeType->name == 'リゾートホテル' ? 'selected' : ''}}>リゾートホテル</option>
                            <option value="3" {{$store->storeType->name == 'ビジネスホテル' ? 'selected' : ''}}>ビジネスホテル</option>
                            <option value="4" {{$store->storeType->name == '旅館' ? 'selected' : ''}}>旅館</option>
                            <option value="5" {{$store->storeType->name == '民宿' ? 'selected' : ''}}>民宿</option>
                            <option value="6" {{$store->storeType->name == 'ペンション' ? 'selected' : ''}}>ペンション</option>
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
                        <input type="text" class="form-control col-9" name="postal"  value="{{$store->postal}}" required>
                    </div>
                </div>
                <div class="col-8">
                    <div class="input-group row">
                        <span class="input-group-text col-3" id="phone">電話番号</span> 
                        <input type="text" class="form-control col-9" value="{{$store->phone}}" name="phone"  required>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3 row">
                <span class="input-group-text col-2" id="address">住所</span>
                <input type="text" class="form-control col-10" value="{{$store->address}}" name="address"  required>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" id="accesss" style="height: 100px" name="access">{{$store->access}}</textarea>
                <label class="form-label" id="access">アクセス情報記入</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" id="description" style="height: 200px" name="description">{{$store->description}}</textarea>
                <label class="form-label" id="description">ホテル情報記入</label>
            </div>
        </div>
        <div class="col-2 offset-5 my-4">
            <button class="btn btn-outline-success w-100" type="submit">編集</button>
        </div>
    </form>
    </div>

</div>

@endsection
