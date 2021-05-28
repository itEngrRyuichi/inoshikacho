
@extends('layout.app')
@section('content')

<div class="container content plan-create-container pb-4">
    <p class="py-4 text-center title">プランを追加する</p>
    <form class="plan-content-wrapper row" action="{{route('stores.plans.store', $store_id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-7">
            <div class="mb-3">
                <label for="plan_name" class="form-label">プラン名</label>
                <input type="text" class="form-control" id="plan_name" name="plan_name" placeholder="例）【記念日におすすめ】1泊朝食＋スパークリングワイン（モスカート・ペタロ）" required>
            </div>
            <div class="form-floating">
                <textarea class="form-control" placeholder="詳細内容を入力（説明文・ご案内・注意事項など）" id="description" name="description"></textarea>
                <label for="description">詳細内容を入力（説明文・ご案内・注意事項など）</label>
            </div>
        </div>
        <div class="col-2">
            <div class="mb-3">
                <label for="rooms" class="form-label">部屋を選択する</label>
                @foreach ($rooms as $room)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="{{$room->id}}" name='rooms[]'>
                        <label class="form-check-label">{{$room->room_name}}</label>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="col-3">
            <label for="prices" class="form-label">値段を設定する</label>
            @foreach ($person_types as $person_type)
                <div class="input-group mb-3 row">
                    <span class="input-group-text col-8" id="type{{$person_type->id}}">{{$person_type->person_types}}</span>
                    <input type="number" class="form-control col-4" name="type{{$person_type->id}}" required>
                </div>
            @endforeach
        </div>
        <div class="img-plan-wrapper row">
            <div class="col-4">
                <label for="select-image1" class="text1 text-center select-label">画像を選択してください <input type="file" id="select-image1" multiple accept="image/*" class="d-none" name="select-image1"></label>
                <img src="{{ asset('images/no-img.png') }}" alt="plan-pic1" class="plan-pic" id="file-preview1">
            </div>
            <div class="col-4">
                <label for="select-image2" class="text1 text-center select-label">画像を選択してください <input type="file" id="select-image2" multiple accept="image/*" class="d-none" name="select-image2"></label>
                <img src="{{ asset('images/no-img.png') }}" alt="plan-pic2" class="plan-pic" id="file-preview2">
            </div>
            <div class="col-4">
                <label for="select-image3" class="text1 text-center select-label">画像を選択してください <input type="file" id="select-image3" multiple accept="image/*" class="d-none" name="select-image3"></label>
                <img src="{{ asset('images/no-img.png') }}" alt="plan-pic3" class="plan-pic" id="file-preview3">
            </div>
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
        <div class="d-flex justify-content-center mt-4">
            <button class="btn btn-outline-primary" type="submit">作成</button>
        </div>
    </form>
</div>
@endsection
