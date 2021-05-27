@extends('layout.app')

@section('content')
<div class="container content store-index-container py-4">
    <form class="store-search-wrapper row py-4 mx-0 mb-4">
        <div class="col-2">
            <label for="area" class="form-label">エリア選択</label>
            <select name="area" id="area" class="form-select">
                <option value="all">全て</option>
                @foreach ($areas as $area)
                    <option value="{{$area->id}}">{{$area->area_name}}</option>
                @endforeach
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
                <a href="/stores/{{$store->id}}" class="sub-title">{{$store->store_name}}</a>
                <div id="carouselStore{{$store->id}}" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselStore{{$store->id}}" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselStore{{$store->id}}" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselStore{{$store->id}}" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('storage/'.$store->images[0]->url) }}" class="store-pic" alt="store-pic">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('storage/'.$store->images[1]->url) }}" class="store-pic" alt="store-pic">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('storage/'.$store->images[2]->url) }}" class="store-pic" alt="store-pic">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselStore{{$store->id}}" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselStore{{$store->id}}" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-6 mx-0">
                <div class="mx-0 d-block">
                    <span class="text-muted type">{{$store->area->area_name}}</span>
                    <span class="text-muted type">{{$store->storeType->store_type_name}}</span>
                </div>
                <div class="row mb-4 mx-0 d-inline">
                    <span class="text1 col-3">〒 {{$store->postal}}</span>
                    <span class="text2 col-7">{{$store->address}}</span>
                    <a href="https://www.google.com/maps/search/{{$store->address}}" target="_blank" class="btn btn-outline-secondary btn-sm col-2">
                        <i class="fas fa-map-marker-alt"></i> 地図
                    </a>
                </div>
                <div class="mb-1 mx-0 d-inline-block">
                    <p class="text1">
                        <span class="amenity"><i class="fas fa-hot-tub"></i> 大浴場</span>
                        <span class="amenity"><img src="{{ asset('images/icons/onsen.png') }}"/> 温泉</span>
                        <span class="amenity"><img src="{{ asset('images/icons/onsen.png') }}"/> 露天風呂</span>
                        <span class="amenity"><i class="fas fa-swimmer"></i> プール</span>
                        <span class="amenity"><i class="fas fa-wifi"></i> 無料wifi</span>
                        <span class="amenity"><i class="fas fa-parking"></i> 駐車場</span>
                    </p>
                </div>
                <div class="mb-1 mx-0 d-flex">
                    <span class="text2">{{$store->description}}</span>
                </div>
                <div class="mb-4 mx-0 d-inline">
                    <label for="access"><i class="fas fa-walking"></i> アクセス:</label>
                    <span class="text1" id="access">
                        {{$store->access}}
                    </span>
                </div>
                <label for="price" class="text-muted mx-0 d-flex justify-content-end"><i class="fas fa-yen-sign pt-1"></i> 大人1名/1泊 税込 合計</label>
                    <p class="text3 mb-4 mx-0 d-flex justify-content-end">6,050<span class="text2 pt-2">円～</span> 20,350<span class="text2 pt-2">円</span></p>
                
                {{-- <div class="d-flex mt-auto mb-3 justify-content-end">
                    <a href="/stores/{{$store->id}}/edit" class="btn btn-outline-success btn-sm">編集</a>
                    <a href="#" class="btn btn-outline-danger btn-sm" id="btn_delete_store">削除</a>
                    <form action="{{ route('stores.destroy', $store->id) }}" method="post" id="delete-form">
                        @csrf
                        @method('delete')
                    </form>
                    <script type="text/javascript">
                        const delete_btn = document.getElementById('btn_delete_store');
                        const delete_form = document.getElementById('delete-form');
                        delete_btn.addEventListener('click', (e) => {
                            e.preventDefault();
                            if(window.confirm('本当に店舗を削除しますか？')){
                            delete_form.submit();
                        }
                        });
                    </script>
                </div> --}}
            </div>
        </div>
    @endforeach

</div>



@endsection
