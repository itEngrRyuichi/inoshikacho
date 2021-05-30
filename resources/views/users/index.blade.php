@extends('layout.app')
@section('content')
<div class="container content users-container py-4">
    <p class="pt-4 text-center title">ユーザ一覧</p>
    <div class="row my-4">
        <div class="col-10 offset-1">
            <form action="#" class="row py-4">
                <div class="col-4 offset-1">
                    <label for="name" class="form-label">キーワード</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="名前 / 住所 / 電話番号 / Email">
                </div>
                <div class="col-2">
                    <label for="type" class="form-label">ユーザ種類</label>
                    <select name="usertype" id="usertype" class="form-select">
                        <option value="all">All</option>
                        <option value="1">サイト管理</option>
                        <option value="2">店舗管理</option>
                        <option value="3">会員</option>
                    </select>
                </div>
                <div class="col-2">
                    <label for="birthday" class="form-label">生年月日</label>
                    <input type="date" name="birthday" id="birthday" class="form-control">
                </div>
                <div class="col-2">
                    <button type="submit" class="btn btn-outline-primary">検索</button>
                </div>
            </form>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">種類</th>
                        <th scope="col">名前</th>
                        <th scope="col">生年月日</th>
                        <th scope="col">住所</th>
                        <th scope="col">電話番号</th>
                        <th scope="col">Eメールアドレス</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr onclick="frameClick({{$user->id}})">
                        <th scope="row">{{$user->id}}</th>
                        <td>
                            @if ($user->type == 1)
                            サイト管理
                            @endif
                            @if ($user->type == 2)
                            店舗管理
                            @endif
                            @if ($user->type == 3)
                            会員
                            @endif
                        </td>
                        <td>
                            <img src="{{ asset('storage/'.$user->images[0]->url) }}" class="rounded-circle" alt="user-image">
                            <span class="mx-2">{{$user->name}}</span>
                        </td>
                        <td>{{ $user->birthday->format('Y年m月d日') }}</td>
                        <td>{{ $user->address }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @include('commons.pagination1')
        </div>
    </div>
</div>
<script type="text/javascript">
    function frameClick($user_id) {
      document.location.href = "/users/" + $user_id;
    }
</script>
@endsection
