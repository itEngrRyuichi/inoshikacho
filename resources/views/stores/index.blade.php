@extends('layout.app')

@section('content')
<div class="store-index-container py-4">
    <form class="store-search-wrapper row py-4 mx-0 mb-4">
        <div class="col-2">
            <label for="area" class="form-label">エリア選択</label>
            <select name="area" id="area" class="form-select">
                <option value="1">北海道</option>
                <option value="2">東北</option>
                <option value="3">北関東</option>
                <option value="4">首都圏</option>
                <option value="5">甲信越</option>
                <option value="6">東海</option>
                <option value="7">伊豆・箱根</option>
                <option value="8">北陸</option>
                <option value="9">近畿</option>
                <option value="10">四国</option>
                <option value="11">山陽・山陰</option>
                <option value="12">九州</option>
                <option value="13">沖縄</option>
            </select>
        </div>
        <div class="col-2">
            <label for="name" class="form-label">宿泊施設名</label>
            <input type="text" class="form-control" id="name" placeholder="宿泊施設名" required>
        </div>
        <div class="col-2">
            <label for="checkin" class="form-label">チェックイン</label>
            <input type="date" class="form-control" placeholder="checkin" aria-label="checkin" aria-describedby="checkin">
        </div>
        <div class="col-2">
            <label for="checkout" class="form-label">チェックアウト</label>
            <input type="date" class="form-control" placeholder="checkout" aria-label="checkout" aria-describedby="checkout">
        </div>
        <div class="col-1">
            <label for="adult" class="form-label">大人</label>
            <input type="number" name="adult" id="adult" class="form-control" value="2">
        </div>
        <div class="col-1">
            <label for="middle" class="form-label">小学生</label>
            <input type="number" name="middle" id="middle" class="form-control" value="0">
        </div>
        <div class="col-1">
            <label for="child" class="form-label">未就学児</label>
            <input type="number" name="child" id="child" class="form-control" value="0">
        </div>
        <div class="col-1">
            <label for="baby" class="form-label">幼児</label>
            <input type="number" name="baby" id="baby" class="form-control" value="0">
        </div>
        <div class="d-flex justify-content-center mt-4">
            <button class="btn btn-outline-secondary" type="submit">検索</button>
        </div>
    </form>
    @foreach ($stores as $store)
    <div class="row store-wrapper mx-0 mb-2 py-4">
        <div class="col-6 mx-0">
            <a href="/stores/1" class="sub-title">{{$store->store_name}}</a>
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
                <span class="text-muted type">{{$store->area->area_name}}</span>
            </div>
            <div class="row mb-4 mx-0 d-inline">
                <span class="text1 col-3">{{-- 123-4567 --}}{{$store->postal}}</span>
                <span class="text2 col-7">{{-- 長野県下高井郡山ノ内町大字平穏２２０２, 湯田中 --}}{{$store->address}}</span>
                <a href="https://www.google.com/maps/search/{{$store->address}}" target="_blank" class="btn btn-outline-secondary btn-sm col-2">
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
                <span class="text2">{{-- 名湯の名にふさわしい泉質、その開放感に身も心もとけてゆくようです。ゆったりとした時をお過ごし下さい。 --}}{{$store->description}}</span>
            </div>
            <div class="mb-4 mx-0 d-flex">
                <label for="access"><i class="fas fa-walking"></i> アクセス:</label>
                <span class="text1" id="access">
                    {{-- ＪＲ各線長野駅善光寺出口→私鉄長野電鉄山ノ内線湯田中行き約５０分<br>
                    湯田中駅下車→長電バス渋・上林温泉行き約１０分渋和合橋下車→徒歩約２分 <br>
                    長電バス線渋・上林温泉行き10分渋和合橋下車: 徒歩約2分 --}}
                    {{$store->access}}
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
    @endforeach
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
