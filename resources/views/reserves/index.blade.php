@extends('layout.app')
@section('content')
<div class="container content reserves-container">
    <p class="pt-4 text-center title">宿泊予約一覧</p>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">予約ID</th>
                <th scope="col">予約者</th>
                <th scope="col">宿泊施設</th>
                <th scope="col">人数</th>
                <th scope="col">チェックイン日</th>
                <th scope="col">チェックアウト日</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reserves as $reserve)
                <tr>
                    <td>{{$reserve->reserve_id}}</td>
                    <td>{{$reserve->name}}</td>
                    <td>{{$reserve->store->store_name}}</td>
                    <td>{{$reserve->number}}</td>
                    <td>{{$reserve->check_in}}</td>
                    <td>{{$reserve->check_out}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection