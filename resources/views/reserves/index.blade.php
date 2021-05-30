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
                <tr class="reserve">
                    <td>{{$reserve->reserve_id}}</td>
                    <td><a href="users/{{$reserve->user_id}}" class="text1">
                        <img src="{{ asset('storage/'.$reserve->url) }}" class="rounded-circle" alt="user-image">
                        <span class="mx-2">
                        {{$reserve->reserver}}</span></a>
                    </td>
                    <td><a href="stores/{{$reserve->store_id}}" class="text1">{{$reserve->store_name}}</a></td>
                    <td>{{
                        $reserve->adult_no->number +
                        $reserve->middle_no->number +
                        $reserve->child_no->number +
                        $reserve->baby_no->number
                        }} 名様</td>
                    <td>{{$reserve->check_in->format('Y年m月d日')}}</td>
                    <td>{{$reserve->check_out->format('Y年m月d日')}}</td>
                    <td><a href="/reserves/{{$reserve->reserve_id}}" class="btn btn-outline-primary btn-sm">詳細</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script type="text/javascript">
        function frameClick($user_id) {
          document.location.href = "/users/" + $user_id;
        }
        ScrollReveal().reveal('.reserve', {
            duration: 1600,
            origin: 'right',
            distance: '150px',
        });
    </script>
</div>
@endsection
