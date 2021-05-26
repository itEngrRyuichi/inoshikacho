
@extends('layout.app')
@section('content')

<div class="container content room-create-container">
    <p class="py-4 text-center title">部屋を追加する</p>
    <form class="room-content-wrapper row" action="{{route('stores.rooms.store',$store_id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="d-inline">
            <div class="mb-3">
                <label for="name" class="form-label">部屋名</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="洋室 スイート 301号室" required>
            </div>
        </div>
        <div class="col-6 amenity-select-wrapper">
            <div class="mb-3">
                <label for="amenities" class="form-label">アメニティーを選択する</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="1" name="amenities[]">
                    <label class="form-check-label" for="1"><i class="fas fa-bed"></i> シングルベッド</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="2" id="1" name="amenities[]">
                    <label class="form-check-label" for="1"><i class="fas fa-bed"></i> ダブルベッド</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="3" id="1" name="amenities[]">
                    <label class="form-check-label" for="1"><i class="fas fa-bed"></i> ツインベッド</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="4" id="1" name="amenities[]">
                    <label class="form-check-label" for="1"><i class="fas fa-bed"></i> セミダブルベッド</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="5" id="1" name="amenities[]">
                    <label class="form-check-label" for="1"><i class="fas fa-bed"></i> 布団</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="2" class="form-check-input" value="6" name="amenities[]">
                    <label for="2" class="from-check-label"><i class="fas fa-wifi"></i> 無料wifi</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="3" class="form-check-input" value="7" name="amenities[]">
                    <label for="3" class="from-check-label"><i class="fas fa-tshirt"></i> ナイトウェア、パジャマ</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="4" class="form-check-input" value="8" name="amenities[]">
                    <label for="4" class="from-check-label"><img src="{{ asset('images/icons/towel.png') }}" alt="towel"> バスタオル、フェイスタオル</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="5" class="form-check-input" value="9" name="amenities[]">
                    <label for="5" class="from-check-label"><i class="fas fa-pump-soap"></i> シャンプー</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="6" class="form-check-input" value="10" name="amenities[]">
                    <label for="6" class="from-check-label"><i class="fas fa-pump-soap"></i> コンディショナー</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="7" class="form-check-input" value="11" name="amenities[]">
                    <label for="7" class="from-check-label"><i class="fas fa-pump-soap"></i> ボディーソープ</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="8" class="form-check-input" value="12" name="amenities[]">
                    <label for="8" class="from-check-label"><img src="{{ asset('images/icons/toothbrush.png') }}" alt="toothbrush"> 歯ブラシ</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="9" class="form-check-input" value="13" name="amenities[]">
                    <label for="9" class="from-check-label"><img src="{{ asset('images/icons/comb.png') }}" alt="comb"> くし</label>
                </div>
            </div>
        </div>
        <div class="col-6">
            <label for="people" class="form-label">制限人数を選択する</label>
            <div class="input-group mb-3 row">
                <span class="input-group-text col-4 offset-1" id="adult">大人</span>
                <input type="number" class="form-control col-2" aria-label="adult" aria-describedby="adult" name="capacity" value="2">
                <span class="input-group-text col-4">人まで</span>
            </div>
  
        </div>
        <div class="img-select-wrapper">
            <div class="col-4">
                <label for="room-pic1">写真1</label>
                <input type="file" name="image1" accept="image/png, image/jpeg">
                <img src="" alt="no image" class="room-pic" id="img1">
            </div>
            <div class="col-4">
                <label for="room-pic2">写真2</label>
                <input type="file" name="image2" accept="image/png, image/jpeg">
                <img src="{{ asset('images/rooms/room2.jpg') }}" alt="preview" class="room-pic">
            </div>
            <div class="col-4">
                <label for="room-pic3">写真3</label>
                <input type="file" name="image3" accept="image/png, image/jpeg">
                <img src="{{ asset('images/rooms/room3.jpg') }}" alt="room-pic" class="room-pic">
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <button class="btn btn-outline-primary" type="submit">作成</button>
        </div>
    </form>
    {{-- 
        // 画像プレビュー用JS
        <script>
        $("[name='image1']").on('change', function(){
            const file = event.target.files[0],
            reader = new FileReader(),
            $preview = document.getElementById('img1');//$('.preview-cover'); // 表示する所
        
            // 画像ファイル以外は処理停止
            if(file.type.indexOf("image") < 0){
              return false;
            }
            // ファイル読み込みが完了した際に発火するイベントを登録
            reader.onload = function() {
                $("#img1").attr('src', e.target.result);
            };
            reader.readAsDataURL(e.target.files[0]);   
        });
        </script> --}}
</div>
@endsection

