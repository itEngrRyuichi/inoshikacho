@extends('layout.app')
@section('content')
<div class="container content users-container">
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
                    <tr onclick="frameClick(1)">
                        <th scope="col">ID</th>
                        <th scope="col">ユーザ種類</th>
                        <th scope="col">名前</th>
                        <th scope="col">生年月日</th>
                        <th scope="col">住所</th>
                        <th scope="col">電話番号</th>
                        <th scope="col">Eメールアドレス</th>
                    </tr>
                </thead>
                <tbody>
                    <tr onclick="frameClick(1)">
                        <th scope="row">1</th>
                        <td>サイト管理</td>
                        <td>
                            <img src="{{asset('images/users/asuma.png')}}" class="rounded-circle" alt="user-image">
                            <span class="mx-2">猿飛 アスマ</span>
                        </td>
                        <td>1983/10/18</td>
                        <td>東京都新宿区</td>
                        <td>090-1234-5678</td>
                        <td>asuma@shippuden.jp</td>
                    </tr>
                    <tr onclick="frameClick(2)">
                        <th scope="row">2</th>
                        <td>店舗管理</td>
                        <td>
                            <img src="{{asset('images/users/ino.jpg')}}" class="rounded-circle" alt="user-image">
                            <span class="mx-2">山中 いの</span>
                        </td>
                        <td>1990/09/23</td>
                        <td>東京都新宿区</td>
                        <td>080-1423-1666</td>
                        <td>ino@shippuden.jp</td>
                    </tr>
                    <tr onclick="frameClick(3)">
                        <th scope="row">3</th>
                        <td>会員</td>
                        <td>
                            <img src="{{asset('images/users/shikamaru.jpg')}}" class="rounded-circle" alt="user-image">
                            <span class="mx-2">奈良 シカマル</span>
                        </td>
                        <td>1990/09/22</td>
                        <td>東京都新宿区</td>
                        <td>080-1432-6345</td>
                        <td>shikamaru@shippuden.jp</td>
                    </tr>
                    <tr onclick="frameClick(4)">
                        <th scope="row">4</th>
                        <td>会員</td>
                        <td>
                            <img src="{{asset('images/users/choji.png')}}" class="rounded-circle" alt="user-image">
                            <span class="mx-2">秋道 チョウジ</span>
                        </td>
                        <td>1990/05/01</td>
                        <td>東京都新宿区</td>
                        <td>090-0002-6005</td>
                        <td>choji@shippuden.jp</td>
                    </tr>
                    <tr onclick="frameClick(5)">
                        <th scope="row">5</th>
                        <td>会員</td>
                        <td>
                            <img src="{{asset('images/users/naruto.png')}}" class="rounded-circle" alt="user-image">
                            <span class="mx-2">うずまき ナルト</span>
                        </td>
                        <td>1990/01/02</td>
                        <td>東京都新宿区</td>
                        <td>090-7777-7777</td>
                        <td>naruto@shippuden.jp</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    function frameClick($user_id) {
      document.location.href = "/users/" + $user_id;
    }
</script>
@endsection
