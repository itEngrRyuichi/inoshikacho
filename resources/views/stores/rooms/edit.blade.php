
@extends('layout.app')
@section('content')

<div class="container content room-create-container">
    <p class="py-4 text-center title">部屋を編集する</p>
    <form class="room-content-wrapper row" action="{{route('stores.rooms.update', ['store_id' => $store_id, 'id' => $room->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="d-inline">
            <div class="mb-3">
                <label for="name" class="form-label">部屋名</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$room->room_name}}">
            </div>
        </div>
        <div class="col-6 amenity-select-wrapper">
            <div class="mb-3">
                <label for="amenities" class="form-label">アメニティーを選択する</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="1" name="amenities[]"
                    @foreach ($amenities as $amenity)
                        @if ($amenity->amenity_name === 'シングルベッド')
                            checked
                        @endif
                    @endforeach
                    >
                    <label class="form-check-label" for="1"><i class="fas fa-bed"></i> シングルベッド</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="2" id="2" name="amenities[]"
                    @foreach ($amenities as $amenity)
                        @if ($amenity->amenity_name === 'ダブルベッド')
                            checked
                        @endif
                    @endforeach
                    >
                    <label class="form-check-label" for="2"><i class="fas fa-bed"></i> ダブルベッド</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="3" id="3" name="amenities[]"
                    @foreach ($amenities as $amenity)
                        @if ($amenity->amenity_name === 'ツインベッド')
                            checked
                        @endif
                    @endforeach
                    >
                    <label class="form-check-label" for="3"><i class="fas fa-bed"></i> ツインベッド</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="4" id="4" name="amenities[]"
                    @foreach ($amenities as $amenity)
                        @if ($amenity->amenity_name === 'セミダブルベッド')
                            checked
                        @endif
                    @endforeach
                    >
                    <label class="form-check-label" for="4"><i class="fas fa-bed"></i> セミダブルベッド</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="5" id="5" name="amenities[]"
                    @foreach ($amenities as $amenity)
                        @if ($amenity->amenity_name === '布団')
                            checked
                        @endif
                    @endforeach
                    >
                    <label class="form-check-label" for="5"><i class="fas fa-bed"></i> 布団</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="6" class="form-check-input" value="6" name="amenities[]"
                    @foreach ($amenities as $amenity)
                        @if ($amenity->amenity_name === '無料wifi')
                            checked
                        @endif
                    @endforeach
                    >
                    <label for="6" class="from-check-label"><i class="fas fa-wifi"></i> 無料wifi</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="7" class="form-check-input" value="7" name="amenities[]"
                    @foreach ($amenities as $amenity)
                        @if ($amenity->amenity_name === 'ナイトウェア、パジャマ')
                            checked
                        @endif
                    @endforeach
                    >
                    <label for="7" class="from-check-label"><i class="fas fa-tshirt"></i> ナイトウェア、パジャマ</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="8" class="form-check-input" value="8" name="amenities[]"
                    @foreach ($amenities as $amenity)
                        @if ($amenity->amenity_name === 'バスタオル、フェイスタオル')
                            checked
                        @endif
                    @endforeach
                    >
                    <label for="8" class="from-check-label"><img src="{{ asset('images/icons/towel.png') }}" alt="towel"> バスタオル、フェイスタオル</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="9" class="form-check-input" value="9" name="amenities[]"
                    @foreach ($amenities as $amenity)
                        @if ($amenity->amenity_name === 'シャンプー')
                            checked
                        @endif
                    @endforeach
                    >
                    <label for="9" class="from-check-label"><i class="fas fa-pump-soap"></i> シャンプー</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="10" class="form-check-input" value="10" name="amenities[]"
                    @foreach ($amenities as $amenity)
                        @if ($amenity->amenity_name === 'コンディショナー')
                            checked
                        @endif
                    @endforeach
                    >
                    <label for="10" class="from-check-label"><i class="fas fa-pump-soap"></i> コンディショナー</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="11" class="form-check-input" value="11" name="amenities[]"
                    @foreach ($amenities as $amenity)
                        @if ($amenity->amenity_name === 'ボディーソープ')
                            checked
                        @endif
                    @endforeach
                    >
                    <label for="11" class="from-check-label"><i class="fas fa-pump-soap"></i> ボディーソープ</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="12" class="form-check-input" value="12" name="amenities[]"
                    @foreach ($amenities as $amenity)
                        @if ($amenity->amenity_name === '歯ブラシ')
                            checked
                        @endif
                    @endforeach
                    >
                    <label for="12" class="from-check-label"><img src="{{ asset('images/icons/toothbrush.png') }}" alt="toothbrush"> 歯ブラシ</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="13" class="form-check-input" value="13" name="amenities[]"
                        @if ($amenity->amenity_name === 'くし')
                            checked
                        @endif
                    >
                    <label for="13" class="from-check-label"><img src="{{ asset('images/icons/comb.png') }}" alt="comb"> くし</label>
                </div>
            </div>
        </div>
        <div class="col-6">
            <label for="people" class="form-label">制限人数を選択する</label>
            <div class="input-group mb-3 row">
                <span class="input-group-text col-4 offset-1" id="adult">大人</span>
                <input type="number" class="form-control col-2" name="capacity" value="{{$room->capacity}}">
                <span class="input-group-text col-4">人まで</span>
            </div>

        </div>
        <div class="img-select-wrapper row mx-2">
            <div class="col-4 mr-1">
                <label for="select-image1" class="text1 text-center select-label">画像を選択してください <input type="file" id="select-image1" multiple accept="image/*" class="d-none" name="select-image1"></label>
                <img src="{{ asset('storage/'.$images[0]->url) }}" alt="room-pic1" class="room-pic" id="file-preview1">
            </div>
            <div class="col-4 mr-1">
                <label for="select-image2" class="text1 text-center select-label">画像を選択してください <input type="file" id="select-image2" multiple accept="image/*" class="d-none" name="select-image2"></label>
                <img src="{{ asset('storage/'.$images[1]->url) }}" alt="room-pic2" class="room-pic" id="file-preview2">
            </div>
            <div class="col-4 ">
                <label for="select-image3" class="text1 text-center select-label">画像を選択してください <input type="file" id="select-image3" multiple accept="image/*" class="d-none" name="select-image3"></label>
                <img src="{{ asset('storage/'.$images[2]->url) }}" alt="room-pic3" class="room-pic" id="file-preview3">
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <button class="btn btn-outline-success" type="submit">編集</button>
        </div>
    </form>
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
    ScrollReveal().reveal('.room-create-container', {
            duration: 1600,
            origin: 'right',
            distance: '150px',
        });
</script>
@endsection

