@extends('layout.app')
@section('content')

<div class="container content show-store-container">
    <p class="pt-4 title">{{$store->store_name}}</p>
    <div class="row store-wrapper mx-0 mb-2 py-4">
        <div class="col-6 mx-0">
            <div id="carouselStore" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselStore" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselStore" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselStore" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('storage/'.$images[0]->url) }}" class="store-pic" alt="store-pic">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('storage/'.$images[1]->url) }}" class="store-pic" alt="store-pic">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('storage/'.$images[2]->url) }}" class="store-pic" alt="store-pic">
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
            <p class="text3 mb-4 mx-0 d-flex justify-content-end">{{number_format($store->min_pric)}}<span class="text2 pt-2">円～</span> {{number_format($store->max_price)}}<span class="text2 pt-2">円</span></p>
            <div class="d-flex mt-auto mb-3 justify-content-end">
                <a href="/stores/{{$store->id}}#comment" class="btn btn-outline-primary btn-sm">口コミを見る</a>
                @if ($store->user_id === Auth::user()->id)
                    <a href="/stores/{{$store->id}}/edit" class="btn btn-outline-success btn-sm">編集</a>
                    <a href="/stores/{{$store->id}}/delete" class="btn btn-outline-danger btn-sm">削除</a>
                @endif
            </div>
        </div>
    </div>
    <p class="pt-4 sub-title">アスマホテルの宿泊プランを探す</p>
    <form class="reserve-search-wrapper mx-0 mb-4 py-4 px-2 row">
        <div class="col-2 offset-1">
            <label for="checkin">チェックイン</label>
            <input type="date" class="form-control col-7" placeholder="checkin" aria-label="checkin" aria-describedby="checkin">
        </div>
        <div class="col-2">
            <label for="checkout">チェックアウト</label>
            <input type="date" class="form-control  col-5" placeholder="checkout" aria-label="checkout" aria-describedby="checkout">
        </div>
        <div class="col-1">
            <label for="adult">大人</label>
            <input type="number" name="adult" id="adult" class="form-control col-5" value="2">
        </div>
        <div class="col-1">
            <label for="middle">小学生</label>
            <input type="number" name="middle" id="middle" class="form-control col-5" value="0">
        </div>
        <div class="col-1">
            <label for="child">未就学児</label>
            <input type="number" name="child" id="child" class="form-control col-5" value="0">
        </div>
        <div class="col-1">
            <label for="baby">幼児</label>
            <input type="number" name="baby" id="baby" class="form-control col-5" value="0">
        </div>
        <div class="col-2 pt-4">
            <button type="submit" class="btn btn-outline-primary">検索する</button>
        </div>
    </form>
    @if ($store->user_id === Auth::user()->id)
    <p class="pt-4 sub-title">店舗管理</p>
    <div class="add-action-wrapper mx-0 mb-4 py-4 d-block">
        <a href="{{route('stores.rooms.create', $store->id)}}" class="btn btn-outline-primary d-inline">部屋を追加する</a>
        <button type="button" class="btn btn-outline-primary d-inline" data-bs-toggle="modal" data-bs-target="#roomsModal">
            部屋一覧
        </button>
        <a href="{{route('stores.plans.create', $store->id)}}" class="btn btn-outline-primary d-inline">プランを追加する</a>
        <a href="{{route('stores.reserves.index', $store->id)}}" class="btn btn-outline-primary d-inline">予約一覧</a>

        <div class="modal fade" id="roomsModal" tabindex="-1" aria-labelledby="roomsModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title text2" id="roomsModalLabel">{{$store->store_name}}の部屋一覧</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">部屋名</th>
                                <th scope="col">最大収容人数</th>
                                <th scope="col">追加日</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rooms as $room)
                            <tr>
                                <th scope="row">{{$room->id}}</th>
                                <td>{{$room->room_name}}</td>
                                <td>{{$room->capacity}}</td>
                                @if ($room->created_at!=null)
                                    <td>{{$room->created_at->format('Y年m月d日')}}</td>
                                @else
                                    <td>{{$room->created_at}}</td>
                                @endif

                                <td>
                                    <a href="/stores/{{$store->id}}/rooms/{{$room->id}}/edit" class="btn btn-outline-success btn-sm">編集</a>
                                    <form action="{{ route('stores.rooms.destroy', ['store_id' => $store->id, 'id' => $room->id]) }}" method="post" id="delete-form">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-danger btn-sm" id="btn_delete_room">削除</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">閉じる</button>
                </div>
            </div>
        </div>
        </div>
    </div>
    @endif

    <p class="pt-4 sub-title">プラン一覧</p>
    @foreach ($plans as $plan)
        <div class="row plan-wrapper mx-0 mb-2 py-4">
            <div class="col-4">
                <div id="carouselRoom{{$plan->room_id.$plan->id}}" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselRoom{{$plan->room_id.$plan->id}}" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselRoom{{$plan->room_id.$plan->id}}" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselRoom{{$plan->room_id.$plan->id}}" data-bs-slide-to="2"></li>
                        <li data-bs-target="#carouselRoom{{$plan->room_id.$plan->id}}" data-bs-slide-to="3"></li>
                        <li data-bs-target="#carouselRoom{{$plan->room_id.$plan->id}}" data-bs-slide-to="4"></li>
                        <li data-bs-target="#carouselRoom{{$plan->room_id.$plan->id}}" data-bs-slide-to="5"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{ asset('storage/'.$plan->room_images[0]->url) }}" class="store-pic" alt="store-pic{{$plan->room_id.$plan->id}}">
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('storage/'.$plan->room_images[1]->url) }}" class="store-pic" alt="store-pic{{$plan->room_id.$plan->id}}">
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('storage/'.$plan->room_images[2]->url) }}" class="store-pic" alt="store-pic{{$plan->room_id.$plan->id}}">
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('storage/'.$plan->plan_images[0]->url) }}" class="store-pic" alt="store-pic{{$plan->room_id.$plan->id}}">
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('storage/'.$plan->plan_images[1]->url) }}" class="store-pic" alt="store-pic{{$plan->room_id.$plan->id}}">
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('storage/'.$plan->plan_images[2]->url) }}" class="store-pic" alt="store-pic{{$plan->room_id.$plan->id}}">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselRoom{{$plan->room_id.$plan->id}}" role="button" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselRoom{{$plan->room_id.$plan->id}}" role="button" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-8">
                <div class="mx-0 mb-2 d-block">
                    <span class="text2">{{$plan->plan_name}}</span>
                </div>
                <div class="mx-0 d-inline">
                    <span class="text-muted type">{{$plan->room_capacity->capacity}}部屋</span>
                    <span class="text-muted type">{{$plan->room_name}}</span>
                </div>
                <div class="mb-2 mx-0 d-block">
                    <p class="text1">
                        @foreach ($plan->room_amenities as $amenity)
                            <span class="amenity d-inline-block">
                                @if ($amenity->amenity_name === 'バスタオル、フェイスタオル'
                                || $amenity->amenity_name === '歯ブラシ'
                                || $amenity->amenity_name === 'くし')
                                <img src="{{ asset($amenity->icon) }}" alt="amenity{{$amenity->id}}">
                                @else
                                    <i class="{{$amenity->icon}}"></i>
                                @endif
                                 {{$amenity->amenity_name}}
                            </span>
                        @endforeach
                    </p>
                </div>
                <div class="mb-2 mx-0 d-flex">
                    <span class="text2">{{$plan->plan_description}}</span>
                </div>
                <div class="row mb-2">
                    <div class=" col-6 mx-0 d-inline-block">
                        <span class="text4 d-block">残り{{$plan->count_rooms}}室</span>
                        <label for="price" class="text-muted"><i class="fas fa-yen-sign"></i> 大人1名/1泊 税込 合計</label>
                        <p class="text3">{{number_format($plan->adult_price->price)}}<span class="text2">円</span></p>
                    </div>
                    <div class="col-6 d-flex mt-auto mb-3 justify-content-end">

                        @if (Auth::user()->type === 3)
                        <a href="{{route('reserves.create', ['store_id' => $store->id, 'plan_id' => $plan->id, 'room_id'=>$room->id])}}" type="submit" class="btn btn-outline-success btn-sm">予約</a>
                        @endif
                        @if ($store->user_id === Auth::user()->id)

                        <a href="{{route('stores.plans.edit', ['store_id' => $store->id, 'id' => $plan->id])}}" type="submit" class="btn btn-outline-success btn-sm">編集</a>
                        <form action="{{ route('stores.plans.destroy', ['store_id' => $store->id, 'id' => $plan->id]) }}" id="delete-form{{$plan->room_id.$plan->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-outline-danger btn-sm">削除</a>
                        </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <div class="comment-wrapper mx-0 mb-4 py-4 row">
        <p class="pt-4 sub-title" id="comment">口コミ</p>
        @if (Auth::user()->type === 3)
        <form action="{{ route('stores.comments.store', $store->id)}}" method="post" class="py-4">
            @csrf
            <p class="text2">コメントする</p>
            <div class="form-floating">
                <textarea class="form-control" id="description" name="comment"></textarea>
                <label for="description" class="form-label">ご感想を入力してください</label>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <button class="btn btn-outline-primary" type="submit">投稿</button>
            </div>
        </form>
        @endif
        @foreach ($comments as $comment)
        <div class="row comments">
            <div class="col-3">
                <img src="{{ asset('storage/'.$comment->url) }}" class="rounded-circle" alt="user-image">
                <span class="mx-2 text1">{{$comment->user->name}}</span>
            </div>
            <div class="col-7">
                <p class="text1">{{$comment->comment}}</p>
            </div>
            <div class="col-2">
                <form action="{{ route('stores.comments.destroy', ['store_id' => $store->id, 'id' => $comment->id]) }}" id="delete-form" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-outline-danger btn-sm">削除</a>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
