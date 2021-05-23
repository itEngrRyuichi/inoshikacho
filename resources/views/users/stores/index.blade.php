@extends('layout.app')

@section('content')
<div class="store-index-container py-4">
    <p class="py-4 text-center title">管理店舗一覧</p>
    <div class="row store-wrapper mx-0 mb-2 py-4">
        <div class="col-6 mx-0">
            <a href="/stores/1" class="sub-title">アスマホテル</a>
            <div id="carouselStore" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselStore" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselStore" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselStore" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('images/stores/hotel1.jpg') }}" class="store-pic" alt="store-pic">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/stores/hotel2.jpg') }}" class="store-pic" alt="store-pic">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/stores/hotel3.jpg') }}" class="store-pic" alt="store-pic">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselStore" role="button" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselStore" role="button" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
        <div class="col-6 mx-0">
            <div class="mx-0 d-block">
                <span class="text-muted type">甲信越</span>
            </div>
            <div class="row mb-4 mx-0 d-inline">
                <span class="text1 col-3">123-4567</span>
                <span class="text2 col-7">長野県下高井郡山ノ内町大字平穏２２０２, 湯田中</span>
                <a href="https://www.google.com/maps/search/長野県下高井郡山ノ内町大字平穏２２０２" target="_blank" class="btn btn-outline-secondary btn-sm col-2">
                    <i class="fas fa-map-marker-alt"></i> 地図
                </a>
            </div>
            <div class="mb-4 mx-0 d-inline-block">
                <p class="text1">
                    <span class="amenity"><i class="fas fa-hot-tub"></i> 大浴場</span>
                    <span class="amenity"><img src="{{ asset('images/icons/onsen.png') }}"/> 温泉</span>
                    <span class="amenity"><img src="{{ asset('images/icons/onsen.png') }}"/> 露天風呂</span>
                    <span class="amenity"><i class="fas fa-swimmer"></i> プール</span>
                    <span class="amenity"><i class="fas fa-wifi"></i> 無料wifi</span>
                    <span class="amenity"><i class="fas fa-parking"></i> 駐車場</span>
                </p>
            </div>
            <div class="mb-4 mx-0 d-flex">
                <span class="text2">名湯の名にふさわしい泉質、その開放感に身も心もとけてゆくようです。ゆったりとした時をお過ごし下さい。</span>
            </div>
            <div class="mb-4 mx-0 d-flex">
                <label for="access"><i class="fas fa-walking"></i> アクセス:</label>
                <span class="text1" id="access">
                    ＪＲ各線長野駅善光寺出口→私鉄長野電鉄山ノ内線湯田中行き約５０分<br>
                    湯田中駅下車→長電バス渋・上林温泉行き約１０分渋和合橋下車→徒歩約２分 <br>
                    長電バス線渋・上林温泉行き10分渋和合橋下車: 徒歩約2分
                </span>
            </div>
            <div class="mb-4 mx-0 d-inline">
                <label for="price" class="text-muted"><i class="fas fa-yen-sign"></i> 大人1名/1泊 税込 合計</label>
                <p class="text3">6,050<span class="text2">円～</span> 20,350<span class="text2">円</span></p>
            </div>
            <div class="d-flex mt-auto mb-3 justify-content-end">
                <a href="/stores/1/edit" class="btn btn-outline-success btn-sm">編集</a>
                <a href="/stores/1/delete" class="btn btn-outline-danger btn-sm">削除</a>
            </div>
        </div>
    </div>
    <div class="row store-wrapper mx-0 mb-2 py-4">
        <div class="col-6 mx-0">
            <a href="/stores/1" class="sub-title">サスケ旅館</a>
            <div id="carouselStore2" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselStore2" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselStore2" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselStore2" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('images/stores/hotel4.jpg') }}" class="store-pic" alt="store-pic">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/stores/hotel5.jpg') }}" class="store-pic" alt="store-pic">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/stores/hotel6.jpg') }}" class="store-pic" alt="store-pic">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselStore2" role="button" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselStore2" role="button" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
        <div class="col-6 mx-0">
            <div class="mx-0 d-block">
                <span class="text-muted type">甲信越</span>
            </div>
            <div class="row mb-4 mx-0 d-inline">
                <span class="text1 col-3">123-4567</span>
                <span class="text2 col-7">長野県下高井郡山ノ内町大字平穏２２０２, 湯田中</span>
                <a href="https://www.google.com/maps/search/長野県下高井郡山ノ内町大字平穏２２０２" target="_blank" class="btn btn-outline-secondary btn-sm col-2">
                    <i class="fas fa-map-marker-alt"></i> 地図
                </a>
            </div>
            <div class="mb-4 mx-0 d-inline-block">
                <p class="text1">
                    <span class="amenity"><img src="{{ asset('images/icons/onsen.png') }}"/> 温泉</span>
                    <span class="amenity"><img src="{{ asset('images/icons/onsen.png') }}"/> 露天風呂</span>
                    <span class="amenity"><i class="fas fa-wifi"></i> 無料wifi</span>
                    <span class="amenity"><i class="fas fa-parking"></i> 駐車場</span>
                </p>
            </div>
            <div class="mb-4 mx-0 d-flex">
                <span class="text2">名湯の名にふさわしい泉質、その開放感に身も心もとけてゆくようです。ゆったりとした時をお過ごし下さい。</span>
            </div>
            <div class="mb-4 mx-0 d-flex">
                <label for="access"><i class="fas fa-walking"></i> アクセス:</label>
                <span class="text1" id="access">
                    ＪＲ各線長野駅善光寺出口→私鉄長野電鉄山ノ内線湯田中行き約５０分<br>
                    湯田中駅下車→長電バス渋・上林温泉行き約１０分渋和合橋下車→徒歩約２分 <br>
                    長電バス線渋・上林温泉行き10分渋和合橋下車: 徒歩約2分
                </span>
            </div>
            <div class="mb-4 mx-0 d-inline">
                <label for="price" class="text-muted"><i class="fas fa-yen-sign"></i> 大人1名/1泊 税込 合計</label>
                <p class="text3">4,000<span class="text2">円～</span> 10,150<span class="text2">円</span></p>
            </div>
            <div class="d-flex mt-auto mb-3 justify-content-end">
                <a href="/stores/1/edit" class="btn btn-outline-success btn-sm">編集</a>
                <a href="/stores/1/delete" class="btn btn-outline-danger btn-sm">削除</a>
            </div>
        </div>
    </div>

</div>



@endsection
