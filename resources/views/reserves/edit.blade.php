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
                <input id="checkin" class="form-control" type="date" name='checkin' value="{{$check_in}}">
            </div>
            <div class="col-2 mb-3 pt-3">
                <label for="checkout" class="form-label">チェックアウト日時</label>
                <input id="checkout" class="form-control" type="date" name='checkout' value="{{$check_out}}">
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
                                <input class="form-control" type="number" name="number" id="adult_number_input" value="{{$adult_number}}">
                            </td>
                            <td class="col-1">名様</td>
                            <td class="col-2 text-end"><span id="adult_price">{{$adult_price->price}}</span> 円</td>
                            <td class="col-3 text-center">× <span id="adult_number"></span> 名 ×  <span id="adult_duration"></span> 泊 =</td>
                            <td class="col-2 text-end"><span id="adult_total"></span> 円</td>
                        </tr>
                        <tr class="row">
                            <td class="col-3">{{$person_types[1]->person_types}}</td>
                            <td class="col-1">
                                <input class="form-control" type="number" name="number" id="middle_number_input" value="{{$middle_number}}">
                            </td>
                            <td class="col-1">名様</td>
                            <td class="col-2 text-end"><span id="middle_price">{{$middle_price->price}}</span> 円</td>
                            <td class="col-3 text-center">× <span id="middle_number"></span> 名 ×  <span id="middle_duration"></span> 泊 =</td>
                            <td class="col-2 text-end"><span id="middle_total"></span> 円</td>
                        </tr>
                        <tr class="row">
                            <td class="col-3">{{$person_types[2]->person_types}}</td>
                            <td class="col-1">
                                <input class="form-control" type="number" name="number" id="child_number_input" value="{{$child_number}}">
                            </td>
                            <td class="col-1">名様</td>
                            <td class="col-2 text-end"><span id="child_price">{{$child_price->price}}</span> 円</td>
                            <td class="col-3 text-center">× <span id="child_number"></span> 名 ×  <span id="child_duration"></span> 泊 =</td>
                            <td class="col-2 text-end"><span id="child_total"></span> 円</td>
                        </tr>
                        <tr class="row">
                            <td class="col-3">{{$person_types[3]->person_types}}</td>
                            <td class="col-1">
                                <input class="form-control" type="number" name="number" id="baby_number_input" value="{{$baby_number}}">
                            </td>
                            <td class="col-1">名様</td>
                            <td class="col-2 text-end"><span id="baby_price">{{$baby_price->price}}</span> 円</td>
                            <td class="col-3 text-center">× <span id="baby_number"></span> 名 ×  <span id="baby_duration"></span> 泊 =</td>
                            <td class="col-2 text-end"><span id="baby_total"></span> 円</td>
                        </tr>
                        <tr class="row">
                            <td colspan="7" class="col-10 text-end">合計</td>
                            <td class="col-2 text-end text2"><span id="total_all"></span> 円</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <script type="text/javascript">
            const checkin = document.getElementById('checkin');
            const checkout = document.getElementById('checkout');

            // adult
            const adult_number_input = document.getElementById('adult_number_input');
            const adult_number = document.getElementById('adult_number');
            const adult_duration = document.getElementById('adult_duration');
            const adult_price = document.getElementById('adult_price');
            const adult_total = document.getElementById('adult_total');
            // middle
            const middle_number_input = document.getElementById('middle_number_input');
            const middle_number = document.getElementById('middle_number');
            const middle_duration = document.getElementById('middle_duration');
            const middle_price = document.getElementById('middle_price');
            const middle_total = document.getElementById('middle_total');
            // child
            const child_number_input = document.getElementById('child_number_input');
            const child_number = document.getElementById('child_number');
            const child_duration = document.getElementById('child_duration');
            const child_price = document.getElementById('child_price');
            const child_total = document.getElementById('child_total');
            // baby
            const baby_number_input = document.getElementById('baby_number_input');
            const baby_number = document.getElementById('baby_number');
            const baby_duration = document.getElementById('baby_duration');
            const baby_price = document.getElementById('baby_price');
            const baby_total = document.getElementById('baby_total');
            // all
            const total_all = document.getElementById('total_all');


            functions();

            adult_number_input.addEventListener('input', (e) => {
                functions();
            });
            middle_number_input.addEventListener('input', (e) => {
                functions();
            });
            child_number_input.addEventListener('input', (e) => {
                functions();
            });
            baby_number_input.addEventListener('input', (e) => {
                functions();
            });

            checkin.addEventListener('input', (e) => {
                functions();
            });

            checkout.addEventListener('input', (e) => {
                functions();
            });

            function functions() {
                people();
                duration();
                total();
            }

            function people() {
                adult_number.textContent = adult_number_input.value;
                middle_number.textContent = middle_number_input.value;
                child_number.textContent = child_number_input.value;
                baby_number.textContent = baby_number_input.value;
            }

            function duration() {
                const diffTime = Math.abs(new Date(checkout.value) - new Date(checkin.value));
                const duration = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

                adult_duration.textContent = duration;
                middle_duration.textContent = duration;
                child_duration.textContent = duration;
                baby_duration.textContent = duration;
            }

            function total() {
                adult_total.textContent = (adult_price.textContent * adult_number.textContent * adult_duration.textContent).toLocaleString();
                middle_total.textContent = (middle_price.textContent * middle_number.textContent * middle_duration.textContent).toLocaleString();
                child_total.textContent = (child_price.textContent * child_number.textContent * child_duration.textContent).toLocaleString();
                baby_total.textContent = (baby_price.textContent * baby_number.textContent * baby_duration.textContent).toLocaleString();
                total_all.textContent =
                (
                    (adult_price.textContent * adult_number.textContent * adult_duration.textContent) +
                    (middle_price.textContent * middle_number.textContent * middle_duration.textContent) +
                    (child_price.textContent * child_number.textContent * child_duration.textContent) +
                    (baby_price.textContent * baby_number.textContent * baby_duration.textContent)
                ).toLocaleString();;
            }




        </script>
        <div class="d-flex justify-content-center mt-4">
            <button class="btn btn-outline-primary" type="submit">予約</button>
        </div>
    </form>
</div>
@endsection
