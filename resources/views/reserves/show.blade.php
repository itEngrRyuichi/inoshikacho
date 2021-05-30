@extends('layout.app')
@section('content')
<div class="container content create-reserve-container pb-4">
    <p class="pt-4 text-center title">予約内容</p>
    <div class="row customer-info-wrapper justify-content-center">
        <div class="col-4 mb-3">
            <p class="pt-4 sub-title">お客様情報</p>
            <label for="name" class="d-flex">お名前 :　<span class="text2">{{$user->name}}</span> 様</label>
            <label for="address" class="d-flex">ご住所 :　<span class="text2">{{$user->address}}</span></label>
            <label for="phone" class="d-flex">お電話 :　<span class="text2">{{$user->phone}}</span></label>
        </div>
        <div class="col-2 mb-3 pt-3">
            <label for="checkin" class="form-label">チェックイン日時 :</label><br>
            <span class="text2">{{$check_in->format('Y年m月d日')}}</span>
        </div>
        <div class="col-2 mb-3 pt-3">
            <label for="checkout" class="form-label">チェックアウト日時 :</label><br>
            <span class="text2">{{$check_out->format('Y年m月d日')}}</span>
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
                        <td class="col-1">{{$adult_number}}　名様</td>
                        <td class="col-2 text-end">{{number_format($adult_price)}} 円</td>
                        <td class="col-3 text-center">× {{$adult_number}} 名 ×  {{$duration}} 泊 =</td>
                        <td class="col-2 text-end">{{number_format($adult_total)}} 円</td>
                    </tr>
                    <tr class="row">
                        <td class="col-3">{{$person_types[1]->person_types}}</td>
                        <td class="col-1">{{$middle_number}}　名様</td>
                        <td class="col-2 text-end">{{number_format($middle_price)}} 円</td>
                        <td class="col-3 text-center">× {{$middle_number}} 名 ×  {{$duration}} 泊 =</td>
                        <td class="col-2 text-end">{{number_format($middle_total)}} 円</td>
                    </tr>
                    <tr class="row">
                        <td class="col-3">{{$person_types[2]->person_types}}</td>
                        <td class="col-1">{{$child_number}}　名様</td>
                        <td class="col-2 text-end">{{number_format($child_price)}} 円</td>
                        <td class="col-3 text-center">× {{$child_number}} 名 ×  {{$duration}} 泊 =</td>
                        <td class="col-2 text-end">{{number_format($child_total)}} 円</td>
                    </tr>
                    <tr class="row">
                        <td class="col-3">{{$person_types[3]->person_types}}</td>
                        <td class="col-1">{{$baby_number}}　名様</td>
                        <td class="col-2 text-end">{{number_format($baby_price)}} 円</td>
                        <td class="col-3 text-center">× {{$baby_number}} 名 ×  {{$duration}} 泊 =</td>
                        <td class="col-2 text-end">{{number_format($baby_total)}} 円</td>
                    </tr>
                    <tr class="row">
                        <td colspan="6" class="col-9 text-end">合計</td>
                        <td class="col-2 text-end text2">{{number_format($total)}} 円</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="btn-group col-4 offset-4 py-4" role="group">
        <a href="{{route('reserves.edit', $reserve->id)}}" class="btn btn-outline-success">編集する</a>
        <a href="#"  class="btn btn-outline-danger" id="btn_delete_reserve" >予約キャンセルする</a>
        <form action="{{ route('reserves.destroy', $reserve->id) }}" method="post" id="delete-form">
            @csrf
            @method('delete')
        </form>
    </div>
    <script type="text/javascript">
        const delete_btn = document.getElementById('btn_delete_reserve');
        const delete_form = document.getElementById('delete-form');
        delete_btn.addEventListener('click', (e) => {
            e.preventDefault();
            if(window.confirm('本当に予約をキャンセルしますか？')){
            delete_form.submit();
        }
        });
        ScrollReveal().reveal('.create-reserve-container', {
            duration: 1600,
            origin: 'right',
            distance: '150px',
        });
</script>
</div>
@endsection
