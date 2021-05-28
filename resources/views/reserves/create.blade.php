@extends('layout.app')
@section('content')
<div class="container content create-reserve-container">
    <p class="pt-4 text-center title">予約</p>
    <form action="{{route('reserves.store')}}" method="POST">
        @csrf
        <input type="hidden" name="provide_id" value="{{$provide->id}}">
        <div class="col-2">
            <div class="mb-3">
                <label for="checkin" class="form-label">チェックイン日時</label>
                <div class="form-check">
                    <input class="form-control col-8" type="date" name='checkin'>
                </div>
            </div>
            <div class="mb-3">
                <label for="checkin" class="form-label">チェックアウト日時</label>
                <div class="form-check">
                    <input class="form-control col-8" type="date" name='checkout'>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <button class="btn btn-outline-primary" type="submit">予約</button>
        </div>
    </form>
</div>
@endsection