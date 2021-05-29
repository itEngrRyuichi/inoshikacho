@extends('layout.app')
@section('content')
<div class="container content create-reserve-container pb-4">
    <p class="pt-4 text-center title">予約確認</p>
    <form action="{{route('reserves.store')}}" method="POST">
        @csrf
        <input type="hidden" name="provide_id" value="{{$provide->id}}">
        <div class="row customer-info-wrapper justify-content-center">
            <div class="col-4 mb-3">
                <p class="pt-4 sub-title">お客様情報</p>
                <label for="name" class="d-flex">お名前 :　<span class="text2">{{Auth::user()->name}}</span> 様</label>
                <label for="address" class="d-flex">ご住所 :　<span class="text2">{{Auth::user()->address}}</span></label>
                <label for="phone" class="d-flex">お電話 :　<span class="text2">{{Auth::user()->phone}}</span></label>
            </div>
            <div class="col-2 mb-3 pt-3">
                <label for="checkin" class="form-label">チェックイン日時</label>
                <input class="form-control" type="date" name='checkin'>
            </div>
            <div class="col-2 mb-3 pt-3">
                <label for="checkin" class="form-label">チェックアウト日時</label>
                <input class="form-control" type="date" name='checkout'>
            </div>
        </div>
        <div class="row store-info-wrapper justify-content-center">
            <div class="col-8 mb-3">
                <p class="pt-4 sub-title">宿泊施設情報</p>
                <label for="hotel_name" class="d-flex pb-2">宿泊施設名 :　<span class="text2">{{$store->store_name}}</span></label>
                <label for="hotel_address" class="d-flex pb-2">ホテル住所 :　<span class="text2">〒{{$store->postal}} {{$store->address}}</span></label>
                <label for="hotel_amenity" class="d-flex pb-4">アクセス :　<span class="text2">{{$store->access}}</span></label>
                <label for="hotel_name" class="d-flex pb-2">プラン名 :　<span class="text2">{{$plan->plan_name}}</span></label>
                <label for="hotel_address" class="d-flex pb-2">お部屋 :　<span class="text2">{{$room->room_name}}</span></label>
                <label for="hotel_amenity" class="d-block pb-2">アメニティー :<br>
                    @foreach ($amenities as $amenity)
                        <span class="d-inline-block pt-2 text2">
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
                </label>
            </div>
        </div>
        <div class="price-info-wrapper row justify-content-center">
            <div class="col-7">
                <p class="pt-4 sub-title">金額</p>
                <table class="table">
                    <tbody>
                        <tr class="row">
                            <td class="col-3">{{$person_types[0]->person_types}}</td>
                            <td class="col-1">
                                <input class="form-control" type="number" name="number" id="number" value="2">
                            </td>
                            <td class="col-1">名様</td>
                            <td class="col-2 text-end">10,000 円</td>
                            <td class="col-3 text-center">× 2 名 ×  1 泊 =</td>
                            <td class="col-2 text-end">20,000 円</td>
                        </tr>
                        <tr class="row">
                            <td class="col-3">{{$person_types[1]->person_types}}</td>
                            <td class="col-1">
                                <input class="form-control" type="number" name="number" id="number" value="1">
                            </td>
                            <td class="col-1">名様</td>
                            <td class="col-2 text-end">8,000 円</td>
                            <td class="col-3 text-center">× 1 名 ×  1 泊 =</td>
                            <td class="col-2 text-end">8,000 円</td>
                        </tr>
                        <tr class="row">
                            <td class="col-3">{{$person_types[2]->person_types}}</td>
                            <td class="col-1">
                                <input class="form-control" type="number" name="number" id="number" value="0">
                            </td>
                            <td class="col-1">名様</td>
                            <td class="col-2 text-end">4,000 円</td>
                            <td class="col-3 text-center">× 0 名 ×  0 泊 =</td>
                            <td class="col-2 text-end">0 円</td>
                        </tr>
                        <tr class="row">
                            <td class="col-3">{{$person_types[3]->person_types}}</td>
                            <td class="col-1">
                                <input class="form-control" type="number" name="number" id="number" value="0">
                            </td>
                            <td class="col-1">名様</td>
                            <td class="col-2 text-end">0 円</td>
                            <td class="col-3 text-center">× 0 名 ×  0 泊 =</td>
                            <td class="col-2 text-end">0 円</td>
                        </tr>
                        <tr class="row">
                            <td colspan="7" class="col-10 text-end">合計</td>
                            <td class="col-2 text-end text2">28,000 円</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <button class="btn btn-outline-primary" type="submit">予約</button>
        </div>
    </form>
</div>
@endsection
