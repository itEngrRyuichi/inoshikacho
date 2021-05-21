@extends('layout.app')

@section('content')
<form class="row g-3 needs-validation py-4 px-3 justify-content-center" novalidate>
    <div class="col-md-2">
        <label for="validationCustom01" class="form-label">ホテル名</label>
        <input type="text" class="form-control" id="validationCustom01" required>
        <div class="valid-feedback">
        最高だ！！
        </div>
    </div>
    <div class="col-md-2">
        <label for="validationCustom02" class="form-label">最寄り駅</label>
        <input type="text" class="form-control" id="validationCustom02"  required>
        <div class="valid-feedback">
        最高だ！！ 
        </div>
    </div>
    <div class="col-md-2">
        <label for="validationCustom04" class="form-label">都道府県</label>
            <select class="form-select" id="validationCustom04" required>
                <option selected disabled value="">選択してください</option>
                <option>北海道</option>
                <option>青森</option>
                <option>秋田</option>
                <option>岩手</option>
            </select>
    </div>
    <div class="d-flex justify-content-center">
        <button class="btn btn-primary" type="submit">検索</button>
    </div>
</form>
<!-- <div class="card row">
    <div class="col-6 offset-3">
        <img src="https://madamefigaro.jp/upload-files/190930_hotel_index_01.jpg" class="card-img-top" alt="...">
    </div>
    <div class="card-body col-6 offset-3">
        <h3 class="card-title">アスマホテル</h3>
        <table class="table table-hover">
        <ul class="list-group">
            <li class="list-group-item">[説明]</li>
            <li class="list-group-item">[住所]</li>
            <li class="list-group-item">[アクセス]</li> 
            <li class="list-group-item">[料金]</li>
            <li class="list-group-item">[おすすめプラン]</li>
        </ul>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
</div>
<div class="d-grid gap-2">
  <button class="btn btn-primary" type="button">宿の登録</button>
</div><br> -->


<!-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://madamefigaro.jp/upload-files/190930_hotel_index_01.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.orienthotel.jp/wp-content/themes/orienthotel-kochi/assets/images/index/hero-4_2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://madamefigaro.jp/upload-files/190930_hotel_index_01.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div> -->

<!-- <div class="card mb-3">
  <div class="row">
    <div class="col-md-5">
      <img src="https://madamefigaro.jp/upload-files/190930_hotel_index_01.jpg" alt="..." style="width:100%;">
    </div>
    <div class="col-md-7">
      <div class="card-body">
      <h3 class="card-title">アスマホテル</h3>
        <table class="table table-hover">
        <ul class="list-group">
            <li class="list-group-item">[説明]</li>
            <li class="list-group-item">[住所]</li>
            <li class="list-group-item">[アクセス]</li> 
            <li class="list-group-item">[料金]</li>
            <li class="list-group-item">[おすすめプラン]</li>
        </ul>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
    </div>
  </div>
</div>

<div class="card mb-3">
  <div class="row">
    <div class="col-md-5">
      <img src="https://madamefigaro.jp/upload-files/190930_hotel_index_01.jpg" alt="..." style="width:100%;">
    </div>
    <div class="col-md-7">
      <div class="card-body">
      <h3 class="card-title">アスマホテル</h3>
        <table class="table table-hover">
        <ul class="list-group">
            <li class="list-group-item">[説明]</li>
            <li class="list-group-item">[住所]</li>
            <li class="list-group-item">[アクセス]</li> 
            <li class="list-group-item">[料金]</li>
            <li class="list-group-item">[おすすめプラン]</li>
        </ul>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
    </div>
  </div>
</div> -->
    <!-- <div class="d-flex justify-content-center">
        <button class="btn btn-primary" type="button">宿の登録</button>
   </div>
 -->
<div class="d-flex">
    <div class="card mb-3">
        <div class="row">
            <div class="col-md-5">
                <img src="https://madamefigaro.jp/upload-files/190930_hotel_index_01.jpg" alt="..." style="width:100%;">
            </div>
            <div class="card-body col-md-7">
                <h3 class="card-title">アスマホテル</h3>
                <table class="table table-hover">
                <ul class="list-group">
                    <li class="list-group-item">[説明]</li>
                    <li class="list-group-item">[住所]</li>
                    <li class="list-group-item">[アクセス]</li> 
                    <li class="list-group-item">[料金]</li>
                    <li class="list-group-item">[おすすめプラン]</li>
                </ul>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
</div>
<div class="d-flex">
    <div class="card mb-3">
        <div class="row">
            <div class="col-md-5">
                <img src="https://madamefigaro.jp/upload-files/190930_hotel_index_01.jpg" alt="..." style="width:100%;">
            </div>
            <div class="card-body col-md-7">
                <h3 class="card-title">アスマホテル</h3>
                <table class="table table-hover">
                <ul class="list-group">
                    <li class="list-group-item">[説明]</li>
                    <li class="list-group-item">[住所]</li>
                    <li class="list-group-item">[アクセス]</li> 
                    <li class="list-group-item">[料金]</li>
                    <li class="list-group-item">[おすすめプラン]</li>
                </ul>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
</div>   

   
@endsection
