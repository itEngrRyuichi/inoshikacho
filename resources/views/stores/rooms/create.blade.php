
@extends('layout.app')
@section('content')

<div class="container content room-create-container">
    <p class="py-4 text-center title">部屋を追加する</p>
    <form class="room-content-wrapper" action="{{route('stores.rooms.store', $store_id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="d-inline">
            <div class="mb-3">
                <label for="name" class="form-label">部屋名</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="洋室 スイート 301号室">
            </div>
        </div>
        <div class="col-6 amenity-select-wrapper">
            <div class="mb-3">
                <label for="amenities" class="form-label">アメニティーを選択する</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="1" name="amenities[]">
                    <label class="form-check-label" for="1"><i class="fas fa-bed"></i> シングルベッド</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="2" id="2" name="amenities[]">                    <label class="form-check-label" for="2"><i class="fas fa-bed"></i> ダブルベッド</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="3" id="3" name="amenities[]">
                    <label class="form-check-label" for="3"><i class="fas fa-bed"></i> ツインベッド</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="4" id="4" name="amenities[]">
                    <label class="form-check-label" for="4"><i class="fas fa-bed"></i> セミダブルベッド</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="5" id="5" name="amenities[]">
                    <label class="form-check-label" for="5"><i class="fas fa-bed"></i> 布団</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="6" id="6" name="amenities[]">
                    <label class="from-check-label" for="6"><i class="fas fa-wifi"></i> 無料wifi</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="7" id="7" name="amenities[]">
                    <label class="from-check-label" for="7"><i class="fas fa-tshirt"></i> ナイトウェア、パジャマ</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="8" id="8" name="amenities[]">
                    <label class="from-check-label" for="8"><img src="{{ asset('images/icons/towel.png') }}" alt="towel"> バスタオル、フェイスタオル</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="9" id="9" name="amenities[]">
                    <label class="from-check-label" for="9"><i class="fas fa-pump-soap"></i> シャンプー</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="10" id="10" name="amenities[]">
                    <label class="from-check-label" for="10"><i class="fas fa-pump-soap"></i> コンディショナー</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="11" id="11" name="amenities[]">
                    <label class="from-check-label" for="11"><i class="fas fa-pump-soap"></i> ボディーソープ</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="12" id="12" name="amenities[]">
                    <label class="from-check-label" for="12"><img src="{{ asset('images/icons/toothbrush.png') }}" alt="toothbrush"> 歯ブラシ</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="13" id="13" name="amenities[]">
                    <label class="from-check-label" for="13"><img src="{{ asset('images/icons/comb.png') }}" alt="comb"> くし</label>
                </div>
            </div>
        </div>
        <div class="col-6">
            <label for="people" class="form-label">制限人数を選択する</label>
            <div class="input-group mb-3 row">
                <span class="input-group-text col-4 offset-1" id="adult">大人</span>
                <input type="number" class="form-control col-2" name="capacity" value="2">
                <span class="input-group-text col-4">人まで</span>
            </div>

        </div>
        <div class="img-select-wrapper row mx-2">
            <div class="col-4 mr-1">
                <label for="select-image1" class="text1 text-center select-label">画像を選択してください <input type="file" id="select-image1" multiple accept="image/*" class="d-none" name="select-image1"></label>
                <img src="{{ asset('images/no-img.png') }}" alt="room-pic1" class="room-pic" id="file-preview1">
            </div>
            <div class="col-4 mr-1">
                <label for="select-image2" class="text1 text-center select-label">画像を選択してください <input type="file" id="select-image2" multiple accept="image/*" class="d-none" name="select-image2"></label>
                <img src="{{ asset('images/no-img.png') }}" alt="room-pic2" class="room-pic" id="file-preview2">
            </div>
            <div class="col-4 ">
                <label for="select-image3" class="text1 text-center select-label">画像を選択してください <input type="file" id="select-image3" multiple accept="image/*" class="d-none" name="select-image3"></label>
                <img src="{{ asset('images/no-img.png') }}" alt="room-pic3" class="room-pic" id="file-preview3">
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <button class="btn btn-outline-primary" type="submit">作成</button>
        </div>
    </form>
</div>
<script type="text/javascript">
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
    document.getElementById('select-image3').addEventListener('change', function (e) {
        var file = e.target.files[0];
        var blobUrl = window.URL.createObjectURL(file);
        var img = document.getElementById('file-preview3');
        img.src = blobUrl;
    });
</script>
@endsection

