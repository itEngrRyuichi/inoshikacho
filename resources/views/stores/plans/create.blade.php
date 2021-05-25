
@extends('layout.app')
@section('content')

<div class="container content plan-create-container">
    <p class="py-4 text-center title">プランを追加する</p>
    <form class="plan-content-wrapper row" action="{{route('stores.plans.store',$store_id)}}" method="POST">
        @csrf
        <div class="col-7">
            <div class="mb-3">
                <label for="name" class="form-label">プラン名</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="例）【記念日におすすめ】1泊朝食＋スパークリングワイン（モスカート・ペタロ）" required>
            </div>
            <div class="form-floating">
                <textarea class="form-control" id="description" name="description"></textarea>
                <label for="description" class="form-label">詳細内容を入力（説明文・ご案内・注意事項など）</label>
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
            <div class="input-group mb-3 row">
                <span class="input-group-text col-4" id="adult">大人</span>
                <input type="number" class="form-control col-4" aria-label="adult" aria-describedby="adult" value="5000" name="adult">
                <span class="input-group-text col-2">円</span>
            </div>
            <div class="input-group mb-3 row">
                <span class="input-group-text col-4" id="middle">小学生</span>
                <input type="number" class="form-control col-4" aria-label="middle" aria-describedby="middle" value="3500" name="middle">
                <span class="input-group-text col-2">円</span>
            </div>
            <div class="input-group mb-3 row">
                <span class="input-group-text col-4" id="child">未就学児</span>
                <input type="number" class="form-control col-4" aria-label="child" aria-describedby="child"  value="3000" name="child">
                <span class="input-group-text col-2">円</span>
            </div>
            <div class="input-group mb-3 row">
                <span class="input-group-text col-4" id="baby">幼児</span>
                <input type="number" class="form-control col-4" aria-label="baby" aria-describedby="baby"  value="0" name="baby">
                <span class="input-group-text col-2">円</span>
            </div>
        </div>
        <div class="img-plan-wrapper row">
            <div class="col-4">
                <label for="room-pic1">写真1</label>
                <img src="{{ asset('images/rooms/room1.jpg') }}" alt="plan-pic" class="plan-pic">
            </div>
            <div class="col-4">
                <label for="room-pic2">写真2</label>
                <img src="{{ asset('images/rooms/room2.jpg') }}" alt="plan-pic" class="plan-pic">
            </div>
            <div class="col-4">
                <label for="room-pic3">写真3</label>
                <img src="{{ asset('images/rooms/room3.jpg') }}" alt="plan-pic" class="plan-pic">
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <button class="btn btn-outline-primary" type="submit">作成</button>
        </div>
    </form>
</div>
@endsection