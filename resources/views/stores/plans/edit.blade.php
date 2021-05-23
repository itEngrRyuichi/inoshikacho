
@extends('layout.app')
@section('content')

<div class="container content plan-create-container">
    <p class="py-4 text-center title">プランを編集する</p>
    <form class="plan-content-wrapper row">
        <div class="col-7">
            <div class="mb-3">
                <label for="name" class="form-label">プラン名</label>
                <input type="text" class="form-control" id="name" name="name" value="洋室 スイート 素泊まり プラン">
            </div>
            <div class="form-floating">
                <textarea class="form-control" id="description" name="description">良質なお部屋です。ゆったりとした時をお過ごし下さい。</textarea>
                <label for="description" class="form-label">詳細内容を入力（説明文・ご案内・注意事項など）</label>
            </div>
        </div>
        <div class="col-2">
            <div class="mb-3">
                <label for="rooms" class="form-label">部屋を選択する</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="1">
                    <label class="form-check-label" for="1">洋室 スイート 301号室</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="2" id="2">
                    <label class="form-check-label" for="2">洋室 スイート 302号室</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="3" id="3">
                    <label class="form-check-label" for="1">洋室 スイート 303号室</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="4" id="4">
                    <label class="form-check-label" for="4">洋室 スタンダード 304号室</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="5" id="5">
                    <label class="form-check-label" for="5">洋室 スタンダード 305号室</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="6" id="6">
                    <label class="form-check-label" for="6">洋室 スタンダード 306号室</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="7" id="7">
                    <label class="form-check-label" for="7">洋室 スタンダード 307号室</label>
                </div>
            </div>
        </div>
        <div class="col-3">
            <label for="prices" class="form-label">値段を設定する</label>
            <div class="input-group mb-3 row">
                <span class="input-group-text col-4" id="adult">大人</span>
                <input type="number" class="form-control col-4" aria-label="adult" aria-describedby="adult" value="5000">
                <span class="input-group-text col-2">円</span>
            </div>
            <div class="input-group mb-3 row">
                <span class="input-group-text col-4" id="middle">小学生</span>
                <input type="number" class="form-control col-4" aria-label="middle" aria-describedby="middle" value="3500">
                <span class="input-group-text col-2">円</span>
            </div>
            <div class="input-group mb-3 row">
                <span class="input-group-text col-4" id="child">未就学児</span>
                <input type="number" class="form-control col-4" aria-label="child" aria-describedby="child"  value="3000">
                <span class="input-group-text col-2">円</span>
            </div>
            <div class="input-group mb-3 row">
                <span class="input-group-text col-4" id="baby">幼児</span>
                <input type="number" class="form-control col-4" aria-label="baby" aria-describedby="baby"  value="0">
                <span class="input-group-text col-2">円</span>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <button class="btn btn-outline-success" type="submit">編集</button>
        </div>
    </form>
</div>
@endsection
