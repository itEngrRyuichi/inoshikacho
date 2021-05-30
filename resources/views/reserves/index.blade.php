@extends('layout.app')
@section('content')
<div class="container content index-reserves-container">
    <p class="pt-4 text-center title">宿泊予約一覧</p>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">予約ID</th>
                <th scope="col">予約者</th>
                <th scope="col">宿泊施設</th>
                <th scope="col">合計人数</th>
                <th scope="col">チェックイン日</th>
                <th scope="col">チェックアウト日</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($reserves as $reserve)
                <tr>
                    <td>{{$reserve->reserve_id}}</td>
                    <td><a href="users/{{$reserve->user_id}}" class="text1">{{$reserve->reserver}}</a></td>
                    <td><a href="stores/{{$reserve->store_id}}" class="text1">{{$reserve->store_name}}</a></td>
                    <td>{{
                        $reserve->adult_no->number +
                        $reserve->middle_no->number +
                        $reserve->child_no->number +
                        $reserve->baby_no->number
                        }} 名様</td>
                    <td>{{$reserve->check_in->format('Y年m月d日')}}</td>
                    <td>{{$reserve->check_out->format('Y年m月d日')}}</td>
                    <td><a href="reserves/{{$reserve->reserve_id}}" class="btn btn-outline-primary btn-sm">詳細</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
