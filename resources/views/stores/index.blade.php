@extends('layout.app')

@section('content')
<div class="store-index-container">
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
    {{-- <div class="d-flex justify-content-center">
        <button class="btn btn-primary" type="button">宿の登録</button>
    </div> --}}

    <div class="store-list row">
        <div class="col-8 offset-2">
            <div class="card my-2">
                <div class="row g-0">
                    <div class="col-md-5">
                        <img src="https://madamefigaro.jp/upload-files/190930_hotel_index_01.jpg" alt="hotel-image" style="width:100%; height:33vh">
                    </div>
                    <div class="card-body col-md-7">
                        <h3 class="card-title">アスマホテル　<span>1,5000 円</span></h3>
                        <p>函館生まれ函館育ち　地域に愛される地元の宿。北海道や地元食材を中心にしたお食事は◎広々大浴場と露天風呂とサウナ完備。</p>
                        <p>〒042-0932　北海道函館市湯川町1-16-18</p>
                        <p><span class="small">函館駅よりタクシーで約20分2000円程度／函館空港よりタクシーで約10分1200円程度</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="store-list row">
        <div class="col-8 offset-2">
            <div class="card my-2">
                <div class="row g-0">
                    <div class="col-md-5">
                        <img src="https://madamefigaro.jp/upload-files/190930_hotel_index_01.jpg" alt="hotel-image" style="width:100%; height:33vh">
                    </div>
                    <div class="card-body col-md-7">
                        <h3 class="card-title">アスマホテル　<span>1,5000 円</span></h3>
                        <p>函館生まれ函館育ち　地域に愛される地元の宿。北海道や地元食材を中心にしたお食事は◎広々大浴場と露天風呂とサウナ完備。</p>
                        <p>〒042-0932　北海道函館市湯川町1-16-18</p>
                        <p><span class="small">函館駅よりタクシーで約20分2000円程度／函館空港よりタクシーで約10分1200円程度</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
