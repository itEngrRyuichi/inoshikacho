@extends('layout.app')

@section('content')
<h1>宿登録画面</h1><br><br>
<div class="input-group mb-6">
    <div class="col-md-1"> 
        <span class="input-group-text" id="name">宿名</span>
    </div>
    <div class="col-md-5">
        <input type="text" class="form-control" {{-- placeholder="記入してください" --}} aria-label="Username" aria-describedby="basic-addon1">
    </div>
</div><br><br>
<div class="input-group">
    <div class="col-md-1">
        <span class="input-group-text" id="postal">郵便番号</span>
    </div>
    <div class="col-md-2.4">
        <input type="text" class="form-control" {{-- placeholder="記入してください" --}} aria-label="Username" aria-describedby="addon-wrapping">
    </div>
    <div class="col-md-0.2">
        <span class="input-group-text">-</span>
    </div>
    <div class="col-md-2.4">
        <input type="text" class="form-control" {{-- placeholder="記入してください" --}} aria-label="Username" aria-describedby="addon-wrapping">
    </div>
</div><br>
<div class="input-group mb-6">  
    <div class="col-md-1">
        <span class="input-group-text" id="address">住所</span>
    </div>
    <div class="col-md-5">
        <input type="text" class="form-control" {{-- placeholder="記入してください" --}} aria-label="Username" aria-describedby="basic-addon1">
    </div>
</div><br><br>
<div class="input-group flex-nowrap">
    <div class="col-md-1">
        <span class="input-group-text" id="phone">電話番号</span>
    </div>
    <div class="col-md-1.6">
        <input type="text" class="form-control"{{--  placeholder="記入してください" --}} aria-label="Username" aria-describedby="addon-wrapping">
    </div>
    <div class="col-md-0.1">
        <span class="input-group-text">-</span>
    </div>
    <div class="col-md-1.6">
        <input type="text" class="form-control" {{-- placeholder="記入してください" --}} aria-label="Username" aria-describedby="addon-wrapping">
    </div>
    <div class="col-md-0.1">
        <span class="input-group-text">-</span>
    </div>
    <div class="col-md-1.6">
        <input type="text" class="form-control" {{-- placeholder="記入してください" --}} aria-label="Username" aria-describedby="addon-wrapping">
    </div>
</div><br>
<div class="input-group flex-nowrap">
    <div class="col-md-1">
        <span class="input-group-text" id="email">メールアドレス</span>
    </div>
    <div class="col-md-2.4">
            <input type="text" class="form-control" {{-- placeholder="記入してください" --}} aria-label="Username" aria-describedby="addon-wrapping">
    </div>
    <div class="col-md-0.2">
        <span class="input-group-text">@</span>
    </div>
    <div class="col-md-2.4">
        <input type="text" class="form-control" {{-- placeholder="記入してください" --}} aria-label="Username" aria-describedby="addon-wrapping">
    </div>
</div><br>
<div class="input-group">
    <div class="col-md-1">
        <span class="input-group-text">店舗詳細</span>
    </div>
    <div class="col-md-5">
        <textarea class="form-control" aria-label="With textarea"></textarea>
    </div>
</div><br>
<div class="input-group">
    <div class="col-md-1">
        <span class="input-group-text">アクセス</span>
    </div>
    <div class="col-md-5">
    <textarea class="form-control" aria-label="With textarea"></textarea>
    </div>
</div><br>
