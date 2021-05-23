
@extends('layout.app')
@section('content')

<div class="container content room-create-container">
    <p class="py-4 text-center title">部屋を編集する</p>
    <form class="room-content-wrapper row">
        <div class="d-inline">
            <div class="mb-3">
                <label for="name" class="form-label">部屋名</label>
                <input type="text" class="form-control" id="name" name="name" value="洋室 スイート 301号室">
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3">
                <label for="amenities" class="form-label">アメニティーを選択する</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="1" checked>
                    <label class="form-check-label" for="1"><i class="fas fa-bed"></i> ダブルベッド</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="2" class="form-check-input">
                    <label for="2" class="from-check-label"><i class="fas fa-wifi"></i> 無料wifi</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="3" class="form-check-input">
                    <label for="3" class="from-check-label"><i class="fas fa-tshirt"></i> ナイトウェア、パジャマ</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="4" class="form-check-input">
                    <label for="4" class="from-check-label"><img src="{{ asset('images/icons/towel.png') }}" alt="towel"> バスタオル、フェイスタオル</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="5" class="form-check-input">
                    <label for="5" class="from-check-label"><i class="fas fa-pump-soap"></i> シャンプー</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="6" class="form-check-input">
                    <label for="6" class="from-check-label"><i class="fas fa-pump-soap"></i> コンディショナー</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="7" class="form-check-input">
                    <label for="7" class="from-check-label"><i class="fas fa-pump-soap"></i> ボディーソープ</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="8" class="form-check-input">
                    <label for="8" class="from-check-label"><img src="{{ asset('images/icons/toothbrush.png') }}" alt="toothbrush"> 歯ブラシ</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="9" class="form-check-input">
                    <label for="9" class="from-check-label"><img src="{{ asset('images/icons/comb.png') }}" alt="comb"> くし</label>
                </div>
            </div>
        </div>
        <div class="col-6">
            <label for="people" class="form-label">制限人数を選択する</label>
            <div class="input-group mb-3 row">
                <span class="input-group-text col-4" id="adult">大人</span>
                <input type="number" class="form-control col-3" aria-label="adult" aria-describedby="adult" value="2">
                <span class="input-group-text col-5">人まで</span>
            </div>
            <div class="input-group mb-3 row">
                <span class="input-group-text col-4" id="middle">小学生</span>
                <input type="number" class="form-control col-3" aria-label="middle" aria-describedby="middle" value="2">
                <span class="input-group-text col-5">人まで</span>
            </div>
            <div class="input-group mb-3 row">
                <span class="input-group-text col-4" id="child">未就学児</span>
                <input type="number" class="form-control col-3" aria-label="child" aria-describedby="child"  value="6">
                <span class="input-group-text col-5">人まで</span>
            </div>
            <div class="input-group mb-3 row">
                <span class="input-group-text col-4" id="baby">幼児</span>
                <input type="number" class="form-control col-3" aria-label="baby" aria-describedby="baby"  value="0">
                <span class="input-group-text col-5">人まで</span>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <button class="btn btn-outline-success" type="submit">編集</button>
        </div>
    </form>
</div>
@endsection
